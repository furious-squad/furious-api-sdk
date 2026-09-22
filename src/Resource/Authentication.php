<?php

namespace Furious\FuriousApiSdk\Resource;

use Furious\FuriousApiSdk\Exception\ApiException;
use Furious\FuriousApiSdk\Token\JwtToken;
use Furious\FuriousApiSdk\Resource\ResourceInterface;
use Furious\FuriousApiSdk\Resource\AbstractResource;

/**
 * Class Authentication
 *
 * Represents an authentication resource in the Furious API.
 *
 * @package Furious\FuriousApiSdk\Resource
 */
class Authentication extends AbstractResource implements ResourceInterface
{
    protected const API_NAME        = "Authentication";
    protected const CATEGORY_NAME   = "Authentication";
    protected const GRAPH_API_NAME  = "Authentication";
    
    protected const API_URI         = "auth";

    protected const API_ALLOWED_ACTIONS = [ self::API_ACTION_AUTH ];

    public function authenticate(array $fields)
    {
        $body = [
            "action"    => self::API_ACTION_AUTH,
            "data"      => $fields
        ];

        $response = $this->client->post(self::API_URI, $body);

        if(array_key_exists('success', $response)) {
            if($response['success'] === false) {
                $messages = implode('. ', $response['message']);

                throw new ApiException($messages);
            }
                
            return new JwtToken($response['token']);
        }
    }
}