<?php

namespace Furious\FuriousApiSdk\Token;

use Furious\FuriousApiSdk\Exception\SdkException;

/**
 * JwtToken Token Class Created after login if JWT token is successfully returned by the API
 */
class JwtToken implements TokenInterface
{
    private string $apiToken;
    
    /**
     * __construct
     *
     * @param  string $apiToken
     * @return void
     */
    public function __construct(string $apiToken)
    {
        $this->apiToken  = $apiToken;
    }
    
    /**
     * getApiToken
     *
     * @return string
     */
    public function getApiToken()
    {
        return $this->apiToken;
    }
    
    /**
     * isTokenValid Check JWT Token Validity
     *
     * @return bool
     */
    public function isTokenValid(): bool
    {
        if(!$this->apiToken) {
            throw new SdkException('JWT Token is empty or not valid');
        }

        $payload = $this->getJwtPayload($this->apiToken);

        if (!isset($payload['exp'])) {
            throw new SdkException('No "exp" field in JWT');
        }

        $now = time();
        
        if ($now < $payload['exp']) {
            return true;
        }
        
        return false;
    }
    
    /**
     * getJwtPayload Extract Payload from JWT string
     *
     * @param  string $jwtToken
     * @return array
     */
    protected function getJwtPayload(string $jwtToken): array
    {
        $parts = explode('.', $jwtToken);

        if (count($parts) !== 3) {
            throw new SdkException('Invalid JWT format');
        }

        $payload = json_decode($this->base64UrlDecode($parts[1]), true);

        return $payload;
    }
    
    /**
     * base64UrlDecode
     *
     * @param  string $data
     * @return string
     */
    protected function base64UrlDecode($data): string
    {
        $remainder = strlen($data) % 4;
        
        if ($remainder) {
            $data .= str_repeat('=', 4 - $remainder);
        }

        return base64_decode(strtr($data, '-_', '+/'));
    }
}