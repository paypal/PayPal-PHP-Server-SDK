<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * Status of Authentication eligibility.
 */
class EnrollmentStatus
{
    /**
     * Yes. The bank is participating in 3-D Secure protocol and will return the ACSUrl.
     */
    public const ENROLLED = 'Y';

    /**
     * No. The bank is not participating in 3-D Secure protocol.
     */
    public const NOTENROLLED = 'N';

    /**
     * Unavailable. The DS or ACS is not available for authentication at the time of the request.
     */
    public const UNAVAILABLE = 'U';

    /**
     * Bypass. The merchant authentication rule is triggered to bypass authentication.
     */
    public const BYPASS = 'B';
}
