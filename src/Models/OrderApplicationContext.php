<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use stdClass;

/**
 * Customizes the payer experience during the approval process for the payment with PayPal.
 * <blockquote><strong>Note:</strong> Partners and Marketplaces might configure <code>brand_name</code>
 * and <code>shipping_preference</code> during partner account setup, which overrides the request
 * values.</blockquote>
 */
class OrderApplicationContext implements \JsonSerializable
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
    private $landingPage = OrderApplicationContextLandingPage::NO_PREFERENCE;

    /**
     * @var string|null
     */
    private $shippingPreference = OrderApplicationContextShippingPreference::GET_FROM_FILE;

    /**
     * @var string|null
     */
    private $userAction = OrderApplicationContextUserAction::CONTINUE_;

    /**
     * @var PaymentMethodPreference|null
     */
    private $paymentMethod;

    /**
     * @var string|null
     */
    private $returnUrl;

    /**
     * @var string|null
     */
    private $cancelUrl;

    /**
     * @var StoredPaymentSource|null
     */
    private $storedPaymentSource;

    /**
     * Returns Brand Name.
     * DEPRECATED. The label that overrides the business name in the PayPal account on the PayPal site. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.brand_name`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Sets Brand Name.
     * DEPRECATED. The label that overrides the business name in the PayPal account on the PayPal site. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.brand_name`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
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
     * Returns Landing Page.
     * DEPRECATED. DEPRECATED. The type of landing page to show on the PayPal site for customer checkout.
     * The fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.landing_page`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     */
    public function getLandingPage(): ?string
    {
        return $this->landingPage;
    }

    /**
     * Sets Landing Page.
     * DEPRECATED. DEPRECATED. The type of landing page to show on the PayPal site for customer checkout.
     * The fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.landing_page`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     *
     * @maps landing_page
     */
    public function setLandingPage(?string $landingPage): void
    {
        $this->landingPage = $landingPage;
    }

    /**
     * Returns Shipping Preference.
     * DEPRECATED. DEPRECATED. The shipping preference:<ul><li>Displays the shipping address to the
     * customer.</li><li>Enables the customer to choose an address on the PayPal site.</li><li>Restricts
     * the customer from changing the address during the payment-approval process.</li></ul>.  The fields
     * in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.
     * shipping_preference`). Please specify this field in the `experience_context` object instead of the
     * `application_context` object.
     */
    public function getShippingPreference(): ?string
    {
        return $this->shippingPreference;
    }

    /**
     * Sets Shipping Preference.
     * DEPRECATED. DEPRECATED. The shipping preference:<ul><li>Displays the shipping address to the
     * customer.</li><li>Enables the customer to choose an address on the PayPal site.</li><li>Restricts
     * the customer from changing the address during the payment-approval process.</li></ul>.  The fields
     * in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.
     * shipping_preference`). Please specify this field in the `experience_context` object instead of the
     * `application_context` object.
     *
     * @maps shipping_preference
     */
    public function setShippingPreference(?string $shippingPreference): void
    {
        $this->shippingPreference = $shippingPreference;
    }

    /**
     * Returns User Action.
     * DEPRECATED. Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.  The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.user_action`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     */
    public function getUserAction(): ?string
    {
        return $this->userAction;
    }

    /**
     * Sets User Action.
     * DEPRECATED. Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.  The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.user_action`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     *
     * @maps user_action
     */
    public function setUserAction(?string $userAction): void
    {
        $this->userAction = $userAction;
    }

    /**
     * Returns Payment Method.
     * The customer and merchant payment preferences.
     */
    public function getPaymentMethod(): ?PaymentMethodPreference
    {
        return $this->paymentMethod;
    }

    /**
     * Sets Payment Method.
     * The customer and merchant payment preferences.
     *
     * @maps payment_method
     */
    public function setPaymentMethod(?PaymentMethodPreference $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Returns Return Url.
     * DEPRECATED. The URL where the customer is redirected after the customer approves the payment. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.return_url`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     */
    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    /**
     * Sets Return Url.
     * DEPRECATED. The URL where the customer is redirected after the customer approves the payment. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.return_url`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     *
     * @maps return_url
     */
    public function setReturnUrl(?string $returnUrl): void
    {
        $this->returnUrl = $returnUrl;
    }

    /**
     * Returns Cancel Url.
     * DEPRECATED. The URL where the customer is redirected after the customer cancels the payment. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.cancel_url`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     */
    public function getCancelUrl(): ?string
    {
        return $this->cancelUrl;
    }

    /**
     * Sets Cancel Url.
     * DEPRECATED. The URL where the customer is redirected after the customer cancels the payment. The
     * fields in `application_context` are now available in the `experience_context` object under the
     * `payment_source` which supports them (eg. `payment_source.paypal.experience_context.cancel_url`).
     * Please specify this field in the `experience_context` object instead of the `application_context`
     * object.
     *
     * @maps cancel_url
     */
    public function setCancelUrl(?string $cancelUrl): void
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * Returns Stored Payment Source.
     * Provides additional details to process a payment using a `payment_source` that has been stored or is
     * intended to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter
     * compatibility:<br/><ul><li>`payment_type=ONE_TIME` is compatible only with
     * `payment_initiator=CUSTOMER`.</li><li>`usage=FIRST` is compatible only with
     * `payment_initiator=CUSTOMER`.</li><li>`previous_transaction_reference` or
     * `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`.
     * </li><li>Only one of the parameters - `previous_transaction_reference` and
     * `previous_network_transaction_reference` - can be present in the request.</li></ul>
     */
    public function getStoredPaymentSource(): ?StoredPaymentSource
    {
        return $this->storedPaymentSource;
    }

    /**
     * Sets Stored Payment Source.
     * Provides additional details to process a payment using a `payment_source` that has been stored or is
     * intended to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter
     * compatibility:<br/><ul><li>`payment_type=ONE_TIME` is compatible only with
     * `payment_initiator=CUSTOMER`.</li><li>`usage=FIRST` is compatible only with
     * `payment_initiator=CUSTOMER`.</li><li>`previous_transaction_reference` or
     * `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`.
     * </li><li>Only one of the parameters - `previous_transaction_reference` and
     * `previous_network_transaction_reference` - can be present in the request.</li></ul>
     *
     * @maps stored_payment_source
     */
    public function setStoredPaymentSource(?StoredPaymentSource $storedPaymentSource): void
    {
        $this->storedPaymentSource = $storedPaymentSource;
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
            $json['brand_name']            = $this->brandName;
        }
        if (isset($this->locale)) {
            $json['locale']                = $this->locale;
        }
        if (isset($this->landingPage)) {
            $json['landing_page']          = OrderApplicationContextLandingPage::checkValue($this->landingPage);
        }
        if (isset($this->shippingPreference)) {
            $json['shipping_preference']   =
                OrderApplicationContextShippingPreference::checkValue(
                    $this->shippingPreference
                );
        }
        if (isset($this->userAction)) {
            $json['user_action']           = OrderApplicationContextUserAction::checkValue($this->userAction);
        }
        if (isset($this->paymentMethod)) {
            $json['payment_method']        = $this->paymentMethod;
        }
        if (isset($this->returnUrl)) {
            $json['return_url']            = $this->returnUrl;
        }
        if (isset($this->cancelUrl)) {
            $json['cancel_url']            = $this->cancelUrl;
        }
        if (isset($this->storedPaymentSource)) {
            $json['stored_payment_source'] = $this->storedPaymentSource;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}