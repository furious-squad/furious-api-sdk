<?php

namespace Furious\FuriousApiSdk\Model;

use Furious\FuriousApiSdk\Token\AnonymousToken;
use Furious\FuriousApiSdk\Token\Token;
use Furious\FuriousApiSdk\Token\TokenInterface;

class Config 
{
    protected const DEFAULT_URL_PROTOCOL = 'https';
    protected const FURIOUS_API_BASE_URI = '/api/v2';

    private string $instanceUrl;
    private ?TokenInterface $token = null;
    private float $timeout = 5.0; // Default timeout in seconds
    
    /**
     * __construct
     *
     * @param  string $instanceUrl
     * @param  ?TokenInterface $token
     * @return void
     */
    public function __construct(string $instanceUrl, ?TokenInterface $token = null)
    {
        $this->instanceUrl  = $this->normalizeUrl($instanceUrl);
        
        if(!$token) {
            $token = new AnonymousToken();
        }

        $this->setToken($token);
    }
    
    /**
     * getInstanceUrl
     *
     * @return string
     */
    public function getInstanceUrl()
    {
        return $this->instanceUrl;
    }
    
    
    /**
     * getInstanceApiUrl
     *
     * @return string
     */
    public function getInstanceApiUrl()
    {
        return self::DEFAULT_URL_PROTOCOL . '://' . $this->instanceUrl . self::FURIOUS_API_BASE_URI;
    }
    
    /**
     * getTimeout
     *
     * @return float
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * setToken
     *
     * @param TokenInterface $authToken
     * @return void
     */
    public function setToken(TokenInterface $authToken)
    {
        $this->token = $authToken;
    }
    
    /**
     * getToken
     *
     * @return TokenInterface
     */
    public function getToken(): TokenInterface
    {
        return $this->token;
    }
    
    /**
     * normalizeUrl
     *
     * @param string $instanceUrl
     * @return string
     */
    private function normalizeUrl(string $instanceUrl)
    {
        $cleanUrl = preg_replace('#^https?://#', '', $instanceUrl);         // remove protocol
        $cleanUrl = rtrim($cleanUrl, '/');

        return $cleanUrl;
    }
}