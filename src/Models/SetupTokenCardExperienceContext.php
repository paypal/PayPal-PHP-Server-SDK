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
 * Customizes the Vault creation flow experience for your customers.
 */
class SetupTokenCardExperienceContext implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $brandName;

    /**
     * @var string|null
     */
    private $locale;

    /**
     * @var string|null
     */
    private $returnUrl;

    /**
     * @var string|null
     */
    private $cancelUrl;

    /**
     * @var string|null
     */
    private $vaultInstruction = 'ON_CREATE_PAYMENT_TOKENS';

    /**
     * Returns Brand Name.
     * The label that overrides the business name in the PayPal account on the PayPal site. The pattern is
     * defined by an external party and supports Unicode.
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Sets Brand Name.
     * The label that overrides the business name in the PayPal account on the PayPal site. The pattern is
     * defined by an external party and supports Unicode.
     *
     * @maps brand_name
     */
    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    /**
     * Returns Locale.
     * The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to
     * localize the error-related strings, such as messages, issues, and suggested actions. The tag is made
     * up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the
     * optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166
     * alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.
     * org/unsd/methodology/m49/).
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * Sets Locale.
     * The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to
     * localize the error-related strings, such as messages, issues, and suggested actions. The tag is made
     * up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the
     * optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166
     * alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.
     * org/unsd/methodology/m49/).
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * Returns Return Url.
     * The URL where the customer is redirected after customer approves leaves the flow. It is a required
     * field for contingency flows like PayPal wallet, 3DS.
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * Sets Return Url.
     * The URL where the customer is redirected after customer approves leaves the flow. It is a required
     * field for contingency flows like PayPal wallet, 3DS.
     *
     * @maps return_url
     */
    public function setReturnUrl(?string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * Returns Cancel Url.
     * The URL where the customer is redirected after customer cancels or leaves the flow. It is a required
     * field for contingency flows like PayPal wallet, 3DS.
     */
    public function getCancelUrl(): ?string
    {
        return $this->cancelUrl;
    }

    /**
     * Sets Cancel Url.
     * The URL where the customer is redirected after customer cancels or leaves the flow. It is a required
     * field for contingency flows like PayPal wallet, 3DS.
     *
     * @maps cancel_url
     */
    public function setCancelUrl(?string $cancelUrl): void
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * Returns Vault Instruction.
     * Vault Instruction on action to be performed after a successful payer approval.
     */
    public function getVaultInstruction(): ?string
    {
        return $this->vaultInstruction;
    }

    /**
     * Sets Vault Instruction.
     * Vault Instruction on action to be performed after a successful payer approval.
     *
     * @maps vault_instruction
     */
    public function setVaultInstruction(?string $vaultInstruction): void
    {
        $this->vaultInstruction = $vaultInstruction;
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
        if (isset($this->brandName)) {
            $json['brand_name']        = $this->brandName;
        }
        if (isset($this->locale)) {
            $json['locale']            = $this->locale;
        }
        if (isset($this->returnUrl)) {
            $json['return_url']        = $this->returnUrl;
        }
        if (isset($this->cancelUrl)) {
            $json['cancel_url']        = $this->cancelUrl;
        }
        if (isset($this->vaultInstruction)) {
            $json['vault_instruction'] = $this->vaultInstruction;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
