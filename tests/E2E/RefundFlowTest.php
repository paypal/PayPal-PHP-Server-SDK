<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Tests\E2E;

use Exception;
use PaypalServerSDKLib\Controllers\OrdersController;
use PaypalServerSDKLib\Controllers\PaymentsController;
use PaypalServerSDKLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSDKLib\Models\Builders\OrderRequestBuilder;
use PaypalServerSDKLib\Models\Builders\PaymentSourceBuilder;
use PaypalServerSDKLib\Models\Builders\PayPalWalletBuilder;
use PaypalServerSDKLib\Models\Builders\PayPalWalletExperienceContextBuilder;
use PaypalServerSDKLib\Models\Builders\PurchaseUnitRequestBuilder;
use PaypalServerSDKLib\Models\CheckoutPaymentIntent;
use PaypalServerSDKLib\Models\Order;
use PaypalServerSDKLib\Models\PayPalExperienceLandingPage;
use PaypalServerSDKLib\Models\Refund;
use PaypalServerSDKLib\Tests\Controllers\BaseTestController;
use PaypalServerSDKLib\Tests\WebDriverUtilities;

class RefundFlowTest extends BaseTestController
{
    /**
     * @var OrdersController OrdersController instance
     */
    protected static $ordersController;

    /**
     * @var PaymentsController PaymentsController instance
     */
    protected static $paymentsController;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        $client = parent::getClient();
        self::$ordersController = $client->getOrdersController();
        self::$paymentsController = $client->getPaymentsController();
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
    public function testCaptureOrder(Order $orderDetail): Order
    {
        $request = [
            'id' => $orderDetail->getId(),
            'payPalRequestId' => strval(rand(1, 99999999999)),
            'prefer' => 'return=representation'
        ];

        $response = self::$ordersController->ordersCapture($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testCaptureOrder
     */
    public function testRefund(Order $captureDetail): Refund
    {
        $purchaseUnits = $captureDetail->getPurchaseUnits();
        $captureId = null;
        if (isset($purchaseUnits)) {
            $captures = $purchaseUnits[0]->getPayments()->getCaptures();
            if (isset($captures)) {
                $captureId = $captures[0]->getId();
            }
        }
        $this->assertNotNull($captureId);
        $request = [
            'captureId' => $captureId,
            'prefer' => 'return=representation'
        ];

        $response = self::$paymentsController->capturesRefund($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testRefund
     */
    public function testGetRefund(Refund $refund): void
    {
        $response = self::$paymentsController->refundsGet($refund->getId() ?? '');

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('COMPLETED', $response->getResult()->getStatus());
    }
}
