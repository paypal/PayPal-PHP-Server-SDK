<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * The item category type.
 */
class ItemCategory
{
    /**
     * Goods that are stored, delivered, and used in their electronic format. This value is not currently
     * supported for API callers that leverage the PayPal for Commerce Platform product.
     */
    public const DIGITAL_GOODS = 'DIGITAL_GOODS';

    /**
     * A tangible item that can be shipped with proof of delivery.
     */
    public const PHYSICAL_GOODS = 'PHYSICAL_GOODS';

    /**
     * A contribution or gift for which no good or service is exchanged, usually to a not for profit
     * organization.
     */
    public const DONATION = 'DONATION';
}
