<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * Configures a Continue or Pay Now checkout flow.
 */
class PaypalExperienceUserAction
{
    /**
     * After you redirect the customer to the PayPal payment page, a Continue button appears. Use this
     * option when the final amount is not known when the checkout flow is initiated and you want to
     * redirect the customer to the merchant page without processing the payment.
     */
    public const CONTINUE_ = 'CONTINUE';

    /**
     * After you redirect the customer to the PayPal payment page, a Pay Now button appears. Use this
     * option when the final amount is known when the checkout is initiated and you want to process the
     * payment immediately when the customer clicks Pay Now.
     */
    public const PAY_NOW = 'PAY_NOW';
}
