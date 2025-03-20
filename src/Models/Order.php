<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * The order details.
 */
class Order implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $createTime;

    /**
     * @var string|null
     */
    private $updateTime;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var PaymentSourceResponse|null
     */
    private $paymentSource;

    /**
     * @var string|null
     */
    private $intent;

    /**
     * @var Payer|null
     */
    private $payer;

    /**
     * @var PurchaseUnit[]|null
     */
    private $purchaseUnits;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var LinkDescription[]|null
     */
    private $links;

    /**
     * Returns Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     */
    public function getCreateTime(): ?string
    {
        return $this->createTime;
    }

    /**
     * Sets Create Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     *
     * @maps create_time
     */
    public function setCreateTime(?string $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * Returns Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
     * Sets Update Time.
     * The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.
     * 6). Seconds are required while fractional seconds are optional. Note: The regular expression
     * provides guidance but does not reject all invalid dates.
     *
     * @maps update_time
     */
    public function setUpdateTime(?string $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * Returns Id.
     * The ID of the order.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The ID of the order.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Payment Source.
     * The payment source used to fund the payment.
     */
    public function getPaymentSource(): ?PaymentSourceResponse
    {
        return $this->paymentSource;
    }

    /**
     * Sets Payment Source.
     * The payment source used to fund the payment.
     *
     * @maps payment_source
     */
    public function setPaymentSource(?PaymentSourceResponse $paymentSource): void
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * Returns Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     */
    public function getIntent(): ?string
    {
        return $this->intent;
    }

    /**
     * Sets Intent.
     * The intent to either capture payment immediately or authorize a payment for an order after order
     * creation.
     *
     * @maps intent
     */
    public function setIntent(?string $intent): void
    {
        $this->intent = $intent;
    }

    /**
     * Returns Payer.
     */
    public function getPayer(): ?Payer
    {
        return $this->payer;
    }

    /**
     * Sets Payer.
     *
     * @maps payer
     */
    public function setPayer(?Payer $payer): void
    {
        $this->payer = $payer;
    }

    /**
     * Returns Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a customer and
     * merchant. Each purchase unit represents either a full or partial order that the customer intends to
     * purchase from the merchant.
     *
     * @return PurchaseUnit[]|null
     */
    public function getPurchaseUnits(): ?array
    {
        return $this->purchaseUnits;
    }

    /**
     * Sets Purchase Units.
     * An array of purchase units. Each purchase unit establishes a contract between a customer and
     * merchant. Each purchase unit represents either a full or partial order that the customer intends to
     * purchase from the merchant.
     *
     * @maps purchase_units
     *
     * @param PurchaseUnit[]|null $purchaseUnits
     */
    public function setPurchaseUnits(?array $purchaseUnits): void
    {
        $this->purchaseUnits = $purchaseUnits;
    }

    /**
     * Returns Status.
     * The order status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The order status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Links.
     * An array of request-related HATEOAS links. To complete payer approval, use the `approve` link to
     * redirect the payer. The API caller has 6 hours (default setting, this which can be changed by your
     * account manager to 24/48/72 hours to accommodate your use case) from the time the order is created,
     * to redirect your payer. Once redirected, the API caller has 6 hours for the payer to approve the
     * order and either authorize or capture the order. If you are not using the PayPal JavaScript SDK to
     * initiate PayPal Checkout (in context) ensure that you include `application_context.return_url` is
     * specified or you will get "We're sorry, Things don't appear to be working at the moment" after the
     * payer approves the payment.
     *
     * @return LinkDescription[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * An array of request-related HATEOAS links. To complete payer approval, use the `approve` link to
     * redirect the payer. The API caller has 6 hours (default setting, this which can be changed by your
     * account manager to 24/48/72 hours to accommodate your use case) from the time the order is created,
     * to redirect your payer. Once redirected, the API caller has 6 hours for the payer to approve the
     * order and either authorize or capture the order. If you are not using the PayPal JavaScript SDK to
     * initiate PayPal Checkout (in context) ensure that you include `application_context.return_url` is
     * specified or you will get "We're sorry, Things don't appear to be working at the moment" after the
     * payer approves the payment.
     *
     * @maps links
     *
     * @param LinkDescription[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }

    /**
     * Converts the Order object to a human-readable string representation.
     *
     * @return string The string representation of the Order object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Order',
            [
                'createTime' => $this->createTime,
                'updateTime' => $this->updateTime,
                'id' => $this->id,
                'paymentSource' => $this->paymentSource,
                'intent' => $this->intent,
                'payer' => $this->payer,
                'purchaseUnits' => $this->purchaseUnits,
                'status' => $this->status,
                'links' => $this->links
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->createTime)) {
            $json['create_time']    = $this->createTime;
        }
        if (isset($this->updateTime)) {
            $json['update_time']    = $this->updateTime;
        }
        if (isset($this->id)) {
            $json['id']             = $this->id;
        }
        if (isset($this->paymentSource)) {
            $json['payment_source'] = $this->paymentSource;
        }
        if (isset($this->intent)) {
            $json['intent']         = $this->intent;
        }
        if (isset($this->payer)) {
            $json['payer']          = $this->payer;
        }
        if (isset($this->purchaseUnits)) {
            $json['purchase_units'] = $this->purchaseUnits;
        }
        if (isset($this->status)) {
            $json['status']         = $this->status;
        }
        if (isset($this->links)) {
            $json['links']          = $this->links;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
