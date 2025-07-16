<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Token\JwtToken;

/**
 * Class Authentication.
 *
 * Represents an authentication resource in the Furious API.
 */
class Authentication extends AbstractResource implements ResourceInterface
{
    protected const API_NAME = 'Authentication';
    protected const CATEGORY_NAME = 'Authentication';
    protected const GRAPH_API_NAME = 'Authentication';

    protected const API_URI = 'auth';

    protected const API_ALLOWED_ACTIONS = [self::API_ACTION_AUTH];

    /**
     * Authenticates the user using provided credentials.
     *
     * Sends a POST request to the API with the specified credentials and, if successful,
     * returns a `JwtToken` instance. If authentication fails, an `ApiException` is thrown
     * with the error messages returned by the API.
     *
     * @param array $fields Associative array containing user credentials.
     *                      Expected keys: 'username' and 'password'.
     *
     * @return JwtToken the authenticated JWT token on success
     *
     * @throws ApiException if authentication fails or API returns an error
     */
    public function authenticate(array $fields)
    {
        $body = [
            'action' => self::API_ACTION_AUTH,
            'data' => $fields,
        ];

        $response = $this->client->post(self::API_URI, $body);

        if (array_key_exists('success', $response)) {
            if (false === $response['success']) {
                $messages = implode('. ', $response['message']);

                throw new ApiException($messages);
            }

            return new JwtToken($response['token']);
        }
    }
}
