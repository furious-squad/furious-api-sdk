<?php

namespace Furious\FuriousApiSdk\Http;

use Furious\FuriousApiSdk\Exception\ApiException;
use GuzzleHttp\Client as GuzzleClient;
use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Token\JwtToken;
use Furious\FuriousApiSdk\Token\TokenInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Client 
{
    private Config $config;
    private GuzzleClient $client;
    
    /**
     * __construct
     *
     * @param Config $config
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        
        $this->client = new GuzzleClient([
            'base_uri' => $this->config->getInstanceApiUrl().'/',
            'timeout' => $this->config->getTimeout()
        ]);
    }
        
    /**
     * get
     *
     * @param  string $endpoint
     * @return array
     */
    public function get(string $endpoint) 
    {   
        try {
            $token      = $this->config->getToken();
            $options    = [];
            
            if($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response   = $this->client->post($endpoint, $options);
            $result     = json_decode((string) $response->getBody(), true);

            return $result;
        } catch(RequestException $e) {
            $response   = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody  = $response ? $response->getBody()->getContents() : 'No body';
            
            throw new ApiException($errorBody, $statusCode);
        }
    }
    
    /**
     * post
     *
     * @param  string $endpoint
     * @param  array $data
     * @return array
     */
    public function post(string $endpoint, array $data = [])
    {   
        try {
            $token      = $this->config->getToken();
            $options    = [ 'json' => $data ];
            
            if($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response   = $this->client->post($endpoint . "/", $options);
            $result     = json_decode((string) $response->getBody(), true);

            return $result;
        } catch(RequestException $e) {
            $response   = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody  = $response ? $response->getBody()->getContents() : 'No body';
            
            throw new ApiException($errorBody, $statusCode);
        }
    }
    
    /**
     * put
     *
     * @param  string $endpoint
     * @param  array $data
     * @return array
     */
    public function put(string $endpoint, array $data = []) 
    {   
        try {
            $token      = $this->config->getToken();
            $options    = [ 'json' => $data ];
            
            if($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response   = $this->client->put($endpoint . "/", $options);
            $result     = json_decode((string) $response->getBody(), true);

            return $result;
        } catch(RequestException $e) {
            $response   = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody  = $response ? $response->getBody()->getContents() : 'No body';
            
            throw new ApiException($errorBody, $statusCode);
        }
    }

    /**
     * Delete
     *
     * @param  string $endpoint
     * @param  array $data
     * @return array
     */
    public function delete(string $endpoint, array $data = []) 
    {   
        try {
            $token      = $this->config->getToken();
            $options    = [ 'json' => $data ];
            
            if($token instanceof JwtToken) {
                $options['headers'] = [
                    'F-Auth-Token' => $token->getApiToken(),
                ];
            }

            $response   = $this->client->delete($endpoint . "/", $options);
            $result     = json_decode((string) $response->getBody(), true);

            return $result;
        } catch(RequestException $e) {
            $response   = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 'No response';
            $errorBody  = $response ? $response->getBody()->getContents() : 'No body';
            
            throw new ApiException($errorBody, $statusCode);
        }
    }
    
    /**
     * updateConfigToken
     *
     * @param  TokenInterface $token
     * @return self
     */
    public function updateConfigToken(TokenInterface $token)
    {
        $this->config->setToken($token);

        return $this;
    }
}