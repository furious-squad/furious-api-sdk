<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Exception\SdkException;
use Furious\FuriousApiSdk\Http\Client;
use Furious\FuriousApiSdk\Query\Filter\AbstractFieldFilter;
use Furious\FuriousApiSdk\Query\Order\AbstractFieldOrder;

/**
 * Classe abstraite pour la gestion des ressources de l'API Furious.
 */
abstract class AbstractResource
{
    protected const API_ACTION_AUTH = 'auth';
    protected const API_ACTION_CREATE = 'create';
    protected const API_ACTION_UPDATE = 'update';
    protected const API_ACTION_SEARCH = 'search';
    protected const API_ACTION_DELETE = 'delete';

    protected const DEFAULT_SEARCH_OFFSET = 0;
    protected const DEFAULT_SEARCH_LIMIT = 20;

    /** @var Client Client HTTP pour les requêtes API. */
    protected Client $client;

    /**
     * Constructeur.
     *
     * @param Client $client client HTTP pour les requêtes API
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Crée une nouvelle ressource.
     *
     * @param array $fields données de la ressource à créer
     *
     * @return array réponse de l'API
     *
     * @throws ApiException en cas d'erreur API
     */
    public function create(array $fields)
    {
        $body = [
            'action' => self::API_ACTION_CREATE,
            'data' => $fields,
        ];

        $response = $this->client->post(static::API_URI, $body);

        if (array_key_exists('success', $response) && false === $response['success']) {
            $message = is_array($response['message']) ? json_encode($response['message']) : $response['message'];

            throw new ApiException($message);
        }

        return $response;
    }

    /**
     * Met à jour une ressource existante.
     *
     * @param array $fields données à mettre à jour
     *
     * @return array réponse de l'API
     *
     * @throws ApiException en cas d'erreur API
     */
    public function update(array $fields)
    {
        $body = [
            'action' => self::API_ACTION_UPDATE,
            'data' => $fields,
        ];

        $response = $this->client->post(static::API_URI, $body);

        if (array_key_exists('success', $response) && false === $response['success']) {
            $message = is_array($response['message']) ? implode("\n", $response['message']) : $response['message'];

            throw new ApiException($message);
        }

        return $response;
    }

    /**
     * Recherche des ressources selon des critères.
     *
     * @param array $fields  champs à retourner
     * @param array $filters filtres à appliquer (AbstractFieldFilter[])
     * @param array $orders  ordres de tri (AbstractFieldOrder[])
     * @param int   $offset  décalage pour la pagination
     * @param int   $limit   nombre maximum de résultats
     *
     * @return array résultats de la recherche
     *
     * @throws SdkException si aucun champ n'est spécifié
     */
    public function search(array $fields = [], array $filters = [], array $orders = [], int $offset = self::DEFAULT_SEARCH_OFFSET, int $limit = self::DEFAULT_SEARCH_LIMIT)
    {
        if (0 === count($fields)) {
            throw new SdkException('Au moins un champs doit être spécifié pour la recherche');
        }

        $searchUri = self::buildSearchString($fields, $filters, $orders, $offset, $limit);

        return $this->client->get($searchUri);
    }

    /**
     * Construit l'URI de recherche GraphQL pour la ressource.
     *
     * @param array $fields  champs à retourner dans la requête
     * @param array $filters filtres à appliquer (AbstractFieldFilter[])
     * @param array $orders  ordres de tri (AbstractFieldOrder[])
     * @param int   $offset  décalage pour la pagination
     * @param int   $limit   nombre maximum de résultats à retourner
     *
     * @return string URI complète de la requête de recherche
     */
    public function buildSearchString(array $fields = [], array $filters = [], array $orders = [], int $offset = self::DEFAULT_SEARCH_OFFSET, int $limit = self::DEFAULT_SEARCH_LIMIT)
    {
        $parameters = [];
        $parameters[] = sprintf('limit:%s', $limit);
        $parameters[] = sprintf('offset:%s', $offset);

        if (count($filters) > 0) {
            $filtersArray = [];
            foreach ($filters as $filterDefinition) {
                if ($filterDefinition instanceof AbstractFieldFilter) {
                    $filtersArray[] = $filterDefinition->getGraphQLFormat();
                }
            }

            if (count($filtersArray) > 0) {
                $parameters[] = sprintf('filter:{%s}', implode(',', $filtersArray));
            }
        }

        if (count($orders) > 0) {
            $orderStrings = [];
            foreach ($orders as $orderDefinition) {
                if ($orderDefinition instanceof AbstractFieldOrder) {
                    $orderStrings[] = $orderDefinition->getGraphQLFormat();
                }
            }

            if (count($orderStrings) > 0) {
                $parameters[] = sprintf('order:[%s]', implode(',', $orderStrings));
            }
        }

        $uri = static::API_URI.'?query={'.static::GRAPH_API_NAME.'(%PARAMETERS%){%FIELDS%}}';
        $uri = str_replace('%PARAMETERS%', implode(',', $parameters), $uri);
        $uri = str_replace('%FIELDS%', implode(',', $fields), $uri);

        return $uri;
    }

    /**
     * Supprime une ressource par son identifiant.
     *
     * @param int $id identifiant de la ressource à supprimer
     *
     * @return array réponse de l'API
     *
     * @throws ApiException en cas d'erreur API
     */
    public function delete(int $id)
    {
        $body = [
            'action' => self::API_ACTION_DELETE,
            'data' => [
                'id' => $id,
            ],
        ];

        $response = $this->client->delete(static::API_URI, $body);

        if (array_key_exists('success', $response) && false === $response['success']) {
            $message = is_array($response['message']) ? implode("\n", $response['message']) : $response['message'];

            throw new ApiException($message);
        }

        return $response;
    }

    /**
     * Lance une exception avec les erreurs de validation des champs.
     *
     * @param array $errors tableau des erreurs de validation
     *
     * @throws SdkException toujours levée avec le détail des erreurs
     */
    protected function throwFieldValidationErrors(array $errors)
    {
        $message = '';

        foreach ($errors as $errorField => $errors) {
            $message .= $errorField.' : ';
            $message .= implode(', ', $errors);
            $message .= "\n";
        }

        throw new SdkException($message);
    }

    /**
     * Lance une exception si la méthode n'est pas autorisée.
     *
     * @throws SdkException toujours levée
     */
    protected static function methodNotAllowed()
    {
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        $caller = $trace[1];

        $fullClass = $caller['class'] ?? 'unknown';
        $class = basename(str_replace('\\', '/', $fullClass));

        $function = $caller['function'] ?? 'unknown';

        throw new SdkException("{$class} n'implémente pas la méthode ".ucfirst($function));
    }
}
