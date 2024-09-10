<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Authentication;

use Closure;
use Exception;
use CoreInterfaces\Core\Request\TypeValidatorInterface;
use Core\Authentication\CoreAuth;
use Core\Client;
use Core\Request\Parameters\HeaderParam;
use Core\Utils\CoreHelper;
use InvalidArgumentException;
use PaypalServerSDKLib\Models\OAuthToken;
use PaypalServerSDKLib\Controllers\OAuthAuthorizationController;
use PaypalServerSDKLib\ConfigurationDefaults;
use PaypalServerSDKLib\ClientCredentialsAuth;

/**
 * Utility class for OAuth 2 authorization and token management
 */
class ClientCredentialsAuthManager extends CoreAuth implements ClientCredentialsAuth
{
    /**
     * Singleton instance of OAuth 2 API controller
     * @var OAuthAuthorizationController
     */
    private $oAuthApi;

    /**
     * @var array
     */
    private $config;

    /**
     * @var OAuthToken|null
     */
    private $internalOAuthToken;

    public function __construct(array $config)
    {
        parent::__construct();
        $this->config = $config;
        $this->internalOAuthToken = $this->getOAuthToken();
    }

    public function setClient(Client $client): void
    {
        $this->oAuthApi = new OAuthAuthorizationController($client);
    }

    /**
     * String value for oAuthClientId.
     */
    public function getOAuthClientId(): string
    {
        return $this->config['oAuthClientId'] ?? ConfigurationDefaults::O_AUTH_CLIENT_ID;
    }

    /**
     * String value for oAuthClientSecret.
     */
    public function getOAuthClientSecret(): string
    {
        return $this->config['oAuthClientSecret'] ?? ConfigurationDefaults::O_AUTH_CLIENT_SECRET;
    }

    /**
     * OAuthToken value for oAuthToken.
     */
    public function getOAuthToken(): ?OAuthToken
    {
        $oAuthToken = $this->config['oAuthToken'];
        if ($oAuthToken instanceof OAuthToken) {
            return clone $oAuthToken;
        }
        return ConfigurationDefaults::O_AUTH_TOKEN;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $oAuthClientId OAuth 2 Client ID
     * @param string $oAuthClientSecret OAuth 2 Client Secret
     */
    public function equals(string $oAuthClientId, string $oAuthClientSecret): bool
    {
        return $oAuthClientId == $this->getOAuthClientId() &&
            $oAuthClientSecret == $this->getOAuthClientSecret();
    }

    /**
     * Clock skew time in seconds applied while checking the OAuth Token expiry.
     */
    public function getOAuthClockSkew(): int
    {
        return $this->config['Oauth2-ClockSkew'] ?? ConfigurationDefaults::OAUTH_2_CLOCK_SKEW;
    }

    /**
     * Fetch the OAuth token.
     * @param  array|null        $additionalParams  Additional parameters to send during authorization
     */
    public function fetchToken(?array $additionalParams = null): OAuthToken
    {
        //send request for access token
        $oAuthToken = $this->oAuthApi->requestToken(
            [
                'authorization' => $this->buildBasicHeader(),
                'scope' => null,
            ],
            $additionalParams
        )->getResult();

        $this->addExpiryTime($oAuthToken);

        return $oAuthToken;
    }

    /**
     * Has the OAuth token expired? If the token argument is not provided then this function will check the expiry of
     * the initial oauthToken, that's set in the client initialization.
     */
    public function isTokenExpired(?OAuthToken $token = null): bool
    {
        $token = $token ?? $this->getOAuthToken();
        if ($token == null || empty($token->getExpiry())) {
            return true;
        }
        return $token->getExpiry() < time() + $this->getOAuthClockSkew();
    }

    private function getTokenFromProvider(): ?OAuthToken
    {
        if ($this->internalOAuthToken != null && !$this->isTokenExpired($this->internalOAuthToken)) {
            return $this->internalOAuthToken;
        }
        $provider = $this->config['Oauth2-TokenProvider'];
        if (is_callable($provider)) {
            $token = Closure::fromCallable($provider)($this->internalOAuthToken, $this);
        } else {
            try {
                $token = $this->fetchToken();
            } catch (Exception $exp) {
                return $this->internalOAuthToken;
            }
        }
        $updateCallback = $this->config['Oauth2-OnTokenUpdate'];
        if (is_callable($updateCallback)) {
            Closure::fromCallable($updateCallback)($token);
        }
        return $token;
    }

    /**
     * Check if client is authorized, throws exceptions when token is null or expired.
     *
     * @throws InvalidArgumentException
     */
    public function validate(TypeValidatorInterface $validator): void
    {
        $this->internalOAuthToken = $this->getTokenFromProvider();
        if ($this->internalOAuthToken == null) {
            throw new InvalidArgumentException('Client is not authorized. An OAuth token is needed to make API calls.');
        }
        if ($this->isTokenExpired($this->internalOAuthToken)) {
            throw new InvalidArgumentException('OAuth token is expired. A valid token is needed to make API calls.');
        }
        parent::__construct(
            HeaderParam::init(
                'Authorization',
                CoreHelper::getBearerAuthString($this->internalOAuthToken->getAccessToken())
            )->requiredNonEmpty()
        );
        parent::validate($validator);
    }

    /**
     * Build authorization header value for basic auth.
     */
    private function buildBasicHeader(): string
    {
        return 'Basic ' . base64_encode(
            $this->getOAuthClientId() . ':' . $this->getOAuthClientSecret()
        );
    }

    /**
     * Adds the expiry time to the given oAuthToken instance.
     */
    private function addExpiryTime(OAuthToken $oAuthToken): void
    {
        $expiresIn = $oAuthToken->getExpiresIn();
        if (empty($expiresIn)) {
            return;
        }
        $oAuthToken->setExpiry(time() + $expiresIn);
    }
}