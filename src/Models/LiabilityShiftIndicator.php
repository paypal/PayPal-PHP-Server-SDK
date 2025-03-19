<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * Liability shift indicator. The outcome of the issuer's authentication.
 */
class LiabilityShiftIndicator
{
    /**
     * Liability is with the merchant.
     */
    public const NO = 'NO';

    /**
     * Liability may shift to the card issuer.
     */
    public const POSSIBLE = 'POSSIBLE';

    /**
     * The authentication system is not available.
     */
    public const UNKNOWN = 'UNKNOWN';
}
