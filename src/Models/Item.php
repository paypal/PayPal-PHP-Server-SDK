<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

use stdClass;

/**
 * The details for the items to be purchased.
 */
class Item implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Money
     */
    private $unitAmount;

    /**
     * @var Money|null
     */
    private $tax;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $sku;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $category;

    /**
     * @var string|null
     */
    private $imageUrl;

    /**
     * @var UniversalProductCode|null
     */
    private $upc;

    /**
     * @param string $name
     * @param Money $unitAmount
     * @param string $quantity
     */
    public function __construct(string $name, Money $unitAmount, string $quantity)
    {
        $this->name = $name;
        $this->unitAmount = $unitAmount;
        $this->quantity = $quantity;
    }

    /**
     * Returns Name.
     * The item name or title.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The item name or title.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Unit Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getUnitAmount(): Money
    {
        return $this->unitAmount;
    }

    /**
     * Sets Unit Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @required
     * @maps unit_amount
     */
    public function setUnitAmount(Money $unitAmount): void
    {
        $this->unitAmount = $unitAmount;
    }

    /**
     * Returns Tax.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getTax(): ?Money
    {
        return $this->tax;
    }

    /**
     * Sets Tax.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps tax
     */
    public function setTax(?Money $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * Returns Quantity.
     * The item quantity. Must be a whole number.
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The item quantity. Must be a whole number.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Description.
     * The detailed item description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The detailed item description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Sku.
     * The stock keeping unit (SKU) for the item.
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    /**
     * Sets Sku.
     * The stock keeping unit (SKU) for the item.
     *
     * @maps sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * Returns Url.
     * The URL to the item being purchased. Visible to buyer and used in buyer experiences.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The URL to the item being purchased. Visible to buyer and used in buyer experiences.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Category.
     * The item category type.
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }

    /**
     * Sets Category.
     * The item category type.
     *
     * @maps category
     */
    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    /**
     * Returns Image Url.
     * The URL of the item's image. File type and size restrictions apply. An image that violates these
     * restrictions will not be honored.
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * Sets Image Url.
     * The URL of the item's image. File type and size restrictions apply. An image that violates these
     * restrictions will not be honored.
     *
     * @maps image_url
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Returns Upc.
     * The Universal Product Code of the item.
     */
    public function getUpc(): ?UniversalProductCode
    {
        return $this->upc;
    }

    /**
     * Sets Upc.
     * The Universal Product Code of the item.
     *
     * @maps upc
     */
    public function setUpc(?UniversalProductCode $upc): void
    {
        $this->upc = $upc;
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
        $json['name']            = $this->name;
        $json['unit_amount']     = $this->unitAmount;
        if (isset($this->tax)) {
            $json['tax']         = $this->tax;
        }
        $json['quantity']        = $this->quantity;
        if (isset($this->description)) {
            $json['description'] = $this->description;
        }
        if (isset($this->sku)) {
            $json['sku']         = $this->sku;
        }
        if (isset($this->url)) {
            $json['url']         = $this->url;
        }
        if (isset($this->category)) {
            $json['category']    = ItemCategory::checkValue($this->category);
        }
        if (isset($this->imageUrl)) {
            $json['image_url']   = $this->imageUrl;
        }
        if (isset($this->upc)) {
            $json['upc']         = $this->upc;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}