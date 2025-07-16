<?php

namespace Furious\FuriousApiSdk;

use Furious\FuriousApiSdk\Exception\SdkException;
use Furious\FuriousApiSdk\Http\Client;
use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Resource\Authentication;
use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Token\TokenInterface;

class FuriousApiSdk
{
    private ?Client $client = null;

    /**
     * __construct.
     */
    public function __construct(Config $config)
    {
        $this->client = $this->getHttpClient($config);
    }

    /**
     * Authenticate API user with username and password
     * and set the JWT Token in config for current session API calls.
     *
     * @param array $fields contains username and password
     */
    public function authenticate(array $fields)
    {
        $authentication = $this->getResource(Authentication::class);
        $authToken = $authentication->authenticate($fields);

        if ($authToken instanceof TokenInterface) {
            self::updateConfigAuthToken($authToken);
        }
    }

    /**
     * updateConfigAuthToken store JWT token in current session Client Config.
     */
    public function updateConfigAuthToken(TokenInterface $token)
    {
        $this->client->updateConfigToken($token);
    }

    /**
     * listRessources List all available API Resources Class.
     *
     * @return array
     */
    public function listRessources()
    {
        $results = [];
        foreach ($this->getTaggedResources() as $taggedResource) {
            $results[] = $taggedResource;
        }

        return $results;
    }

    /**
     * getResource Load single API Resource Class to make API Calls.
     *
     * @param mixed $furiousResourceClass
     *
     * @return ResourceInterface
     */
    public function getResource(string $furiousResourceClass)
    {
        foreach ($this->getTaggedResources() as $taggedResource) {
            if ($taggedResource === $furiousResourceClass) {
                return new $taggedResource($this->client);
            }
        }

        throw new SdkException('La ressource est introuvable.');
    }

    /**
     * getTaggedResources Autoload Resources class parsing all class implementing ResourceInterface.
     */
    private function getTaggedResources(): iterable
    {
        $dir = __DIR__.'/Resource';
        $namespace = 'Furious\FuriousApiSdk\Resource\\';
        $interface = ResourceInterface::class;

        foreach (scandir($dir) as $file) {
            if ('php' !== pathinfo($file, PATHINFO_EXTENSION)) {
                continue;
            }

            $className = $namespace.pathinfo($file, PATHINFO_FILENAME);

            if (!class_exists($className)) {
                continue;
            }

            if (in_array($interface, class_implements($className))) {
                yield $className;
            }
        }
    }

    /**
     * getHttpClient Init HTTP Client for SDK API Calls setting the config.
     *
     * @return Client
     */
    private function getHttpClient(Config $config)
    {
        return new Client($config);
    }
}
