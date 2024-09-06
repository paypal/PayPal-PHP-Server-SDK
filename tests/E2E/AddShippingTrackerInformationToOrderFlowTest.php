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
use PayPalRESTAPIsLib\Models\Builders\OrderTrackerItemBuilder;
use PayPalRESTAPIsLib\Models\Builders\OrderTrackerRequestBuilder;
use PayPalRESTAPIsLib\Models\Builders\PatchBuilder;
use PayPalRESTAPIsLib\Models\Builders\PaymentSourceBuilder;
use PayPalRESTAPIsLib\Models\Builders\PayPalWalletBuilder;
use PayPalRESTAPIsLib\Models\Builders\PayPalWalletExperienceContextBuilder;
use PayPalRESTAPIsLib\Models\Builders\PurchaseUnitRequestBuilder;
use PayPalRESTAPIsLib\Models\Builders\UniversalProductCodeBuilder;
use PayPalRESTAPIsLib\Models\CheckoutPaymentIntent;
use PayPalRESTAPIsLib\Models\Order;
use PayPalRESTAPIsLib\Models\PatchOp;
use PayPalRESTAPIsLib\Models\PayPalExperienceLandingPage;
use PayPalRESTAPIsLib\Models\ShipmentCarrier;
use PayPalRESTAPIsLib\Models\UPCType;
use PayPalRESTAPIsLib\Tests\Controllers\BaseTestController;
use PayPalRESTAPIsLib\Tests\WebDriverUtilities;

class AddShippingTrackerInformationToOrderFlowTest extends BaseTestController
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
    public function testCreateOrderTrack(Order $captureDetail): Order
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
            'id' => $captureDetail->getId(),
            'body' => OrderTrackerRequestBuilder::init($captureId ?? '')
                ->trackingNumber('443844607820')
                ->carrier(ShipmentCarrier::FEDEX)
                ->notifyPayer(false)
                ->items(
                    [
                        OrderTrackerItemBuilder::init()
                            ->name('T-Shirt')
                            ->quantity('1')
                            ->sku('sku02')
                            ->url('https://www.example.com/example')
                            ->imageUrl('https://www.example.com/example.jpg')
                            ->upc(UniversalProductCodeBuilder::init(UPCType::UPCA, 'upc001')->build())
                            ->build()
                    ]
                )
                ->build(),
        ];

        $response = self::$ordersController->ordersTrackCreate($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(201, $response->getStatusCode());

        return $response->getResult();
    }

    /**
     * @depends testCreateOrderTrack
     */
    public function testUpdateOrderTrack(Order $shippingOrder): void
    {
        $purchaseUnits = $shippingOrder->getPurchaseUnits();
        $trackerId = null;
        if (isset($purchaseUnits)) {
            $trackers = $purchaseUnits[0]->getShipping()->getTrackers();
            if (isset($trackers)) {
                $trackerId = $trackers[0]->getId();
            }
        }
        $this->assertNotNull($trackerId);
        $request = [
            'id' => $shippingOrder->getId(),
            'trackerId' => $trackerId ?? '',
            'body' => [
                PatchBuilder::init(
                    PatchOp::REPLACE
                )
                    ->path('/notify_payer')
                    ->value(true)
                    ->build()
            ]
        ];

        $response = self::$ordersController->ordersTrackersPatch($request);

        $this->assertTrue($response->isSuccess());
        $this->assertEquals(204, $response->getStatusCode());
    }
}
