<?php

use Furious\FuriousApiSdk\Model\Config;
use Furious\FuriousApiSdk\Token\AnonymousToken;
use Furious\FuriousApiSdk\Token\TokenInterface;
use PHPUnit\Framework\TestCase;

/**
 * Unit tests for the Config model.
 *
 * These tests validate URL normalization and token handling
 * within the SDK configuration.
 *
 * @internal
 *
 * @coversNothing
 */
class FuriousConfigTest extends TestCase
{
    /**
     * Ensures that the instance URL provided with a scheme
     * is normalized to host only (no scheme).
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::__construct
     * @covers \Furious\FuriousApiSdk\Model\Config::getInstanceUrl
     */
    public function testInstanceUrlIsNormalized(): void
    {
        $config = new Config('https://myinstance.furious.test');
        $this->assertEquals('myinstance.furious.test', $config->getInstanceUrl());
    }

    /**
     * Ensures that trailing slashes in the instance URL
     * are properly trimmed during normalization.
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::__construct
     * @covers \Furious\FuriousApiSdk\Model\Config::getInstanceUrl
     */
    public function testInstanceUrlTrimsTrailingSlash(): void
    {
        $config = new Config('https://myinstance.furious.test/');
        $this->assertEquals('myinstance.furious.test', $config->getInstanceUrl());
    }

    /**
     * Ensures that the API URL is correctly derived from the instance URL
     * and always returned with HTTPS and the /api/v2 suffix.
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::getInstanceApiUrl
     */
    public function testInstanceApiUrlIsCorrect(): void
    {
        $config = new Config('http://myinstance.furious.test');
        $this->assertEquals('https://myinstance.furious.test/api/v2', $config->getInstanceApiUrl());
    }

    /**
     * Ensures that when no token is provided, the default token
     * is an instance of AnonymousToken.
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::__construct
     * @covers \Furious\FuriousApiSdk\Model\Config::getToken
     */
    public function testDefaultTokenIsAnonymous(): void
    {
        $config = new Config('https://some.url');
        $this->assertInstanceOf(AnonymousToken::class, $config->getToken());
    }

    /**
     * Ensures that a custom token passed into the constructor
     * is stored and retrievable via getToken().
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::__construct
     * @covers \Furious\FuriousApiSdk\Model\Config::getToken
     */
    public function testCustomTokenIsStored(): void
    {
        $mockToken = $this->createMock(TokenInterface::class);
        $config = new Config('https://some.url', $mockToken);
        $this->assertSame($mockToken, $config->getToken());
    }

    /**
     * Ensures that the token can be replaced after instantiation
     * by calling setToken() and is properly returned by getToken().
     *
     * @covers \Furious\FuriousApiSdk\Model\Config::getToken
     * @covers \Furious\FuriousApiSdk\Model\Config::setToken
     */
    public function testTokenCanBeReplaced(): void
    {
        $config = new Config('https://some.url');
        $newToken = $this->createMock(TokenInterface::class);
        $config->setToken($newToken);
        $this->assertSame($newToken, $config->getToken());
    }
}
