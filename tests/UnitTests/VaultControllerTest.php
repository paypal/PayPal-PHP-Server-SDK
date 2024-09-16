<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Tests\UnitTests;

use PaypalServerSDKLib\Controllers\VaultController;
use PaypalServerSDKLib\Models\Builders\PaymentTokenRequestBuilder;
use PaypalServerSDKLib\Models\Builders\PaymentTokenRequestPaymentSourceBuilder;
use PaypalServerSDKLib\Models\Builders\SetupTokenRequestBuilder;
use PaypalServerSDKLib\Models\Builders\SetupTokenRequestPaymentSourceBuilder;
use PaypalServerSDKLib\Models\Builders\VaultTokenRequestBuilder;
use PaypalServerSDKLib\Models\TokenRequestType;
use PaypalServerSDKLib\Tests\Controllers\BaseTestController;

class VaultControllerTest extends BaseTestController
{
    /**
     * @var VaultController OrdersController instance
     */
    protected static $controller;
    private const NON_EXISTENT_SETUP_TOKEN_ID = 'setup-1';
    private const NON_EXISTENT_PAYMENT_TOKEN_ID = 'payment-1';
    private const NON_EXISTENT_CUSTOMER_ID = 'customer-1';
    private const INVALID_ID = "'dw";

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getVaultController();
    }

    public function testSetupTokensCreateWithStatus400()
    {
        // Parameters for the API call
        $request = [
            'payPalRequestId' => '',
            'body' => SetupTokenRequestBuilder::init(
                SetupTokenRequestPaymentSourceBuilder::init()->build()
            )->build()
        ];
        // Perform API call
        $result = self::$controller->setupTokensCreate($request);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(400)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testPaymentTokensCreateWithStatus404()
    {
        // Parameters for the API call
        $request = [
            'body' => PaymentTokenRequestBuilder::init(
                PaymentTokenRequestPaymentSourceBuilder::init()->build()
            )->build(),
            'payPalRequestId' => '',
        ];
        // Perform API call
        $result = self::$controller->paymentTokensCreate($request);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(404)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testPaymentTokensCreateWithStatus400()
    {
        // Parameters for the API call
        $request = [
            'body' => PaymentTokenRequestBuilder::init(
                PaymentTokenRequestPaymentSourceBuilder::init()
                    ->token(VaultTokenRequestBuilder::init(self::INVALID_ID, TokenRequestType::SETUP_TOKEN)->build())
                    ->build()
            )->build(),
            'payPalRequestId' => '',
        ];
        // Perform API call
        $result = self::$controller->paymentTokensCreate($request);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(400)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testSetupTokensGetWithStatus404()
    {
        // Perform API call
        $result = self::$controller->setupTokensGet(self::NON_EXISTENT_SETUP_TOKEN_ID);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(404)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testSetupTokensGetWithStatus400()
    {
        // Perform API call
        $result = self::$controller->setupTokensGet(self::INVALID_ID);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(400)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testPaymentTokensGetWithStatus404()
    {
        // Perform API call
        $result = self::$controller->paymentTokensGet(self::NON_EXISTENT_PAYMENT_TOKEN_ID);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(404)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testPaymentTokensGetWithStatus400()
    {
        // Perform API call
        $result = self::$controller->paymentTokensGet(self::NON_EXISTENT_PAYMENT_TOKEN_ID);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(404)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testCustomerPaymentTokensGetWithStatus404()
    {
        // Parameters for the API call
        $request = [
            'customerId' => self::NON_EXISTENT_CUSTOMER_ID,
            'pageSize' => 5,
            'page' => 1,
            'totalRequired' => false,
        ];
        // Perform API call
        $result = self::$controller->customerPaymentTokensGet($request);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(404)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testCustomerPaymentTokensGetWithStatus400()
    {
        // Parameters for the API call
        $request = [
            'customerId' => self::INVALID_ID,
            'pageSize' => 5,
            'page' => 1,
            'totalRequired' => false,
        ];
        // Perform API call
        $result = self::$controller->customerPaymentTokensGet($request);

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->assertTrue($result->isError());
        $this->newTestCase($result->getResult())
            ->expectStatus(400)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->assert();
    }

    public function testPaymentTokensDeleteWithStatus204()
    {
        // Perform API call
        $result = self::$controller->paymentTokensDelete(self::NON_EXISTENT_PAYMENT_TOKEN_ID);

        // Assert result with expected response
        $this->assertTrue($result->isSuccess());
        $this->newTestCase($result->getResult())
            ->expectStatus(204)
            ->assert();
    }
}
