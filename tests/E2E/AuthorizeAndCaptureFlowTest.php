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
use PaypalServerSDKLib\Models\Builders\AmountBreakdownBuilder;
use PaypalServerSDKLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSDKLib\Models\Builders\ItemBuilder;
use PaypalServerSDKLib\Models\Builders\MoneyBuilder;
use PaypalServerSDKLib\Models\Builders\OrderRequestBuilder;
use PaypalServerSDKLib\Models\Builders\PaymentSourceBuilder;
use PaypalServerSDKLib\Models\Builders\PayPalWalletBuilder;
use PaypalServerSDKLib\Models\Builders\PayPalWalletExperienceContextBuilder;
use PaypalServerSDKLib\Models\Builders\PurchaseUnitRequestBuilder;
use PaypalServerSDKLib\Models\CapturedPayment;
use PaypalServerSDKLib\Models\CheckoutPaymentIntent;
use PaypalServerSDKLib\Models\Order;
use PaypalServerSDKLib\Models\OrderAuthorizeResponse;
use PaypalServerSDKLib\Models\PayPalExperienceLandingPage;
use PaypalServerSDKLib\Tests\Controllers\BaseTestController;
use PaypalServerSDKLib\Tests\WebDriverUtilities;

class AuthorizeAndCaptureFlowTest extends BaseTestController
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
                CheckoutPaymentIntent::AUTHORIZE,
                [
                    PurchaseUnitRequestBuilder::init(
                        AmountWithBreakdownBuilder::init(
                            'USD',
                            '25.00'
                        )
                            ->breakdown(
                                AmountBreakdownBuilder::init()
                                    ->itemTotal(
                                        MoneyBuilder::init(
                                            'USD',
                                            '25.00'
                                        )->build()
                                    )
                                    ->shipping(
                                        MoneyBuilder::init(
                                            'USD',
                                            '0'
                                        )->build()
                                    )
                                    ->taxTotal(
                                        MoneyBuilder::init(
                                            'USD',
                                            '0'
                                        )->build()
                                    )
                                    ->build()
                            )->build()
                    )
                        ->description('Clothing Shop')
                        ->items([
                            ItemBuilder::init(
                                'Levis 501',
                                MoneyBuilder::init(
                                    'USD',
                                    '25.00'
                                )->build(),
                                '1'
                            )
                                ->tax(
                                    MoneyBuilder::init(
                                        'USD',
                                        '0.00'
                                    )->build()
                                )
                                ->sku('5158936')
                                ->build()
                        ])
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
    public function testAuthorizeOrder(Order $orderDetail): OrderAuthorizeResponse
    {
        $request = [
            'id' => $orderDetail->getId(),
            'payPalRequestId' => strval(rand(1, 99999999999)),
            'prefer' => 'return=representation'
        ];

        $response = self::$ordersController->ordersAuthorize($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testAuthorizeOrder
     */
    public function testCaptureAuthorization(OrderAuthorizeResponse $authorizeResponse): CapturedPayment
    {
        $purchaseUnits = $authorizeResponse->getPurchaseUnits();
        $authorizationId = null;
        if (isset($purchaseUnits)) {
            $authorizations = $purchaseUnits[0]->getPayments()->getAuthorizations();
            if (isset($authorizations)) {
                $authorizationId = $authorizations[0]->getId();
            }
        }
        $this->assertNotNull($authorizationId);
        $request = [
            'authorizationId' => $authorizationId,
            'prefer' => 'return=representation'
        ];

        $response = self::$paymentsController->authorizationsCapture($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testAuthorizeOrder
     */
    public function testGetAuthorization(OrderAuthorizeResponse $authorizeResponse): void
    {
        $purchaseUnits = $authorizeResponse->getPurchaseUnits();
        $authorizationId = null;
        if (isset($purchaseUnits)) {
            $authorizations = $purchaseUnits[0]->getPayments()->getAuthorizations();
            if (isset($authorizations)) {
                $authorizationId = $authorizations[0]->getId();
            }
        }
        $this->assertNotNull($authorizationId);
        $response = self::$paymentsController->authorizationsGet($authorizationId ?? '');

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('CAPTURED', $response->getResult()->getStatus());
    }

    /**
     * @depends testCaptureAuthorization
     */
    public function testCapturePayment(CapturedPayment $capturedPayment): void
    {
        $response = self::$paymentsController->capturesGet($capturedPayment->getId() ?? '');

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('COMPLETED', $response->getResult()->getStatus());
    }
}
