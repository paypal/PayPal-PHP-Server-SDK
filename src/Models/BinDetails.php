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
 * Bank Identification Number (BIN) details used to fund a payment.
 */
class BinDetails implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bin;

    /**
     * @var string|null
     */
    private $issuingBank;

    /**
     * @var string|null
     */
    private $binCountryCode;

    /**
     * @var string[]|null
     */
    private $products;

    /**
     * Returns Bin.
     * The Bank Identification Number (BIN) signifies the number that is being used to identify the
     * granular level details (except the PII information) of the card.
     */
    public function getBin(): ?string
    {
        return $this->bin;
    }

    /**
     * Sets Bin.
     * The Bank Identification Number (BIN) signifies the number that is being used to identify the
     * granular level details (except the PII information) of the card.
     *
     * @maps bin
     */
    public function setBin(?string $bin): void
    {
        $this->bin = $bin;
    }

    /**
     * Returns Issuing Bank.
     * The issuer of the card instrument.
     */
    public function getIssuingBank(): ?string
    {
        return $this->issuingBank;
    }

    /**
     * Sets Issuing Bank.
     * The issuer of the card instrument.
     *
     * @maps issuing_bank
     */
    public function setIssuingBank(?string $issuingBank): void
    {
        $this->issuingBank = $issuingBank;
    }

    /**
     * Returns Bin Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     */
    public function getBinCountryCode(): ?string
    {
        return $this->binCountryCode;
    }

    /**
     * Sets Bin Country Code.
     * The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country
     * or region. Note: The country code for Great Britain is GB and not UK as used in the top-level domain
     * names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled
     * price (CUP) method, bank card, and cross-border transactions.
     *
     * @maps bin_country_code
     */
    public function setBinCountryCode(?string $binCountryCode): void
    {
        $this->binCountryCode = $binCountryCode;
    }

    /**
     * Returns Products.
     * The type of card product assigned to the BIN by the issuer. These values are defined by the issuer
     * and may change over time. Some examples include: PREPAID_GIFT, CONSUMER, CORPORATE.
     *
     * @return string[]|null
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * Sets Products.
     * The type of card product assigned to the BIN by the issuer. These values are defined by the issuer
     * and may change over time. Some examples include: PREPAID_GIFT, CONSUMER, CORPORATE.
     *
     * @maps products
     *
     * @param string[]|null $products
     */
    public function setProducts(?array $products): void
    {
        $this->products = $products;
    }

    /**
     * Converts the BinDetails object to a human-readable string representation.
     *
     * @return string The string representation of the BinDetails object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BinDetails',
            [
                'bin' => $this->bin,
                'issuingBank' => $this->issuingBank,
                'binCountryCode' => $this->binCountryCode,
                'products' => $this->products
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
        if (isset($this->bin)) {
            $json['bin']              = $this->bin;
        }
        if (isset($this->issuingBank)) {
            $json['issuing_bank']     = $this->issuingBank;
        }
        if (isset($this->binCountryCode)) {
            $json['bin_country_code'] = $this->binCountryCode;
        }
        if (isset($this->products)) {
            $json['products']         = $this->products;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
