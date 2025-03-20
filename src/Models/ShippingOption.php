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
 * The options that the payee or merchant offers to the payer to ship or pick up their items.
 */
class ShippingOption implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var Money|null
     */
    private $amount;

    /**
     * @var bool
     */
    private $selected;

    /**
     * @param string $id
     * @param string $label
     * @param bool $selected
     */
    public function __construct(string $id, string $label, bool $selected)
    {
        $this->id = $id;
        $this->label = $label;
        $this->selected = $selected;
    }

    /**
     * Returns Id.
     * A unique ID that identifies a payer-selected shipping option.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * A unique ID that identifies a payer-selected shipping option.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Label.
     * A description that the payer sees, which helps them choose an appropriate shipping option. For
     * example, `Free Shipping`, `USPS Priority Shipping`, `Expédition prioritaire USPS`, or `USPS yōuxiān
     * fā huò`. Localize this description to the payer's locale.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     * A description that the payer sees, which helps them choose an appropriate shipping option. For
     * example, `Free Shipping`, `USPS Priority Shipping`, `Expédition prioritaire USPS`, or `USPS yōuxiān
     * fā huò`. Localize this description to the payer's locale.
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Type.
     * A classification for the method of purchase fulfillment.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * A classification for the method of purchase fulfillment.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getAmount(): ?Money
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps amount
     */
    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Selected.
     * If the API request sets `selected = true`, it represents the shipping option that the payee or
     * merchant expects to be pre-selected for the payer when they first view the `shipping.options` in the
     * PayPal Checkout experience. As part of the response if a `shipping.option` contains `selected=true`,
     * it represents the shipping option that the payer selected during the course of checkout with PayPal.
     * Only one `shipping.option` can be set to `selected=true`.
     */
    public function getSelected(): bool
    {
        return $this->selected;
    }

    /**
     * Sets Selected.
     * If the API request sets `selected = true`, it represents the shipping option that the payee or
     * merchant expects to be pre-selected for the payer when they first view the `shipping.options` in the
     * PayPal Checkout experience. As part of the response if a `shipping.option` contains `selected=true`,
     * it represents the shipping option that the payer selected during the course of checkout with PayPal.
     * Only one `shipping.option` can be set to `selected=true`.
     *
     * @required
     * @maps selected
     */
    public function setSelected(bool $selected): void
    {
        $this->selected = $selected;
    }

    /**
     * Converts the ShippingOption object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingOption object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingOption',
            [
                'id' => $this->id,
                'label' => $this->label,
                'type' => $this->type,
                'amount' => $this->amount,
                'selected' => $this->selected
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
        $json['id']         = $this->id;
        $json['label']      = $this->label;
        if (isset($this->type)) {
            $json['type']   = $this->type;
        }
        if (isset($this->amount)) {
            $json['amount'] = $this->amount;
        }
        $json['selected']   = $this->selected;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
