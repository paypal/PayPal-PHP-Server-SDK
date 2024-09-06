<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Tests;

use Core\Types\CallbackCatcher;
use PayPalRESTAPIsLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PayPalRESTAPIsLib\Environment;
use PayPalRESTAPIsLib\PayPalRESTAPIsClient;
use PayPalRESTAPIsLib\PayPalRESTAPIsClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): PayPalRESTAPIsClient
    {
        $clientBuilder = PayPalRESTAPIsClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(PayPalRESTAPIsClientBuilder $builder): PayPalRESTAPIsClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        PayPalRESTAPIsClientBuilder $builder
    ): PayPalRESTAPIsClientBuilder {
        $timeout = '10000';
        $environment = Environment::SANDBOX;
        $oAuthClientId = getenv('CLIENT_ID');
        $oAuthClientSecret = getenv('CLIENT_SECRET');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($oAuthClientId) && !empty($oAuthClientSecret)) {
            $builder->clientCredentialsAuthCredentials(
                ClientCredentialsAuthCredentialsBuilder::init($oAuthClientId, $oAuthClientSecret)
            );
        }

        return $builder;
    }
}