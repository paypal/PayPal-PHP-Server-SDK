<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Tests\E2E;

use Exception;
use PayPalRESTAPIsLib\Controllers\OrdersController;
use PayPalRESTAPIsLib\Models\Builders\AmountWithBreakdownBuilder;
use PayPalRESTAPIsLib\Models\Builders\OrderRequestBuilder;
use PayPalRESTAPIsLib\Models\Builders\PaymentSourceBuilder;
use PayPalRESTAPIsLib\Models\Builders\PayPalWalletBuilder;
use PayPalRESTAPIsLib\Models\Builders\PayPalWalletExperienceContextBuilder;
use PayPalRESTAPIsLib\Models\Builders\PurchaseUnitRequestBuilder;
use PayPalRESTAPIsLib\Models\CheckoutPaymentIntent;
use PayPalRESTAPIsLib\Models\Order;
use PayPalRESTAPIsLib\Models\PayPalExperienceLandingPage;
use PayPalRESTAPIsLib\Tests\Controllers\BaseTestController;
use PayPalRESTAPIsLib\Tests\WebDriverUtilities;

class StandardCheckoutFlowTest extends BaseTestController
{
    /**
     * @var OrdersController OrdersController instance
     */
    protected static $ordersController;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        $client = parent::getClient();
        self::$ordersController = $client->getOrdersController();
    }

    public function testCreateOrder(): Order
    {
        $request = [
            'body' => OrderRequestBuilder::init(
                CheckoutPaymentIntent::CAPTURE,
                [
                    PurchaseUnitRequestBuilder::init(
                        AmountWithBreakdownBuilder::init(
                            'USD',
                            '100.00'
                        )->build()
                    )
                        ->referenceId('d9f80740-38f0-11e8-b467-0ed5f89f718b')
                        ->build()
                ]
            )
                ->paymentSource(
                    PaymentSourceBuilder::init()
                        ->paypal(
                            PayPalWalletBuilder::init()
                                ->experienceContext(
                                    PayPalWalletExperienceContextBuilder::init()
                                        ->locale('en-US')
                                        ->returnUrl('https://example.com/returnUrl')
                                        ->cancelUrl('https://example.com/cancelUrl')
                                        ->landingPage(PayPalExperienceLandingPage::LOGIN)
                                        ->build()
                                )
                                ->build()
                        )
                        ->build()
                )
                ->build()
        ];

        $response = self::$ordersController->ordersCreate($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(200, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testCreateOrder
     * @throws Exception
     */
    public function testCompletePayment(Order $orderDetail): void
    {
        $links = $orderDetail->getLinks();
        $url = null;
        if (isset($links)) {
            $url = $links[1]->getHref();
        }
        $this->assertNotNull($url);
        WebDriverUtilities::completePayment($url ?? '');
    }

    /**
     * @depends testCreateOrder
     * @depends testCompletePayment
     */
    public function testCaptureOrder(Order $orderDetail): void
    {
        $request = [
            'id' => $orderDetail->getId(),
            'payPalRequestId' => strval(rand(1, 99999999999)),
            'prefer' => 'return=representation'
        ];

        $response = self::$ordersController->ordersCapture($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());
    }

    /**
     * @depends testCreateOrder
     * @depends testCaptureOrder
     */
    public function testGetOrderDetails(Order $orderDetail): void
    {
        $request = [
            'id' => $orderDetail->getId()
        ];

        $response = self::$ordersController->ordersGet($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(200, $response->getStatusCode());
    }
}
