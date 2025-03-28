<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * The tenure type of the billing cycle identifies if the billing cycle is a trial(free or discounted)
 * or regular billing cycle.
 */
class TenureType
{
    /**
     * A regular billing cycle to identify recurring charges for the billing agreement.
     */
    public const REGULAR = 'REGULAR';

    /**
     * A trial billing cycle to identify free or discounted charge for the billing agreement. Free trails
     * will not have a price object in pricing scheme where as a discounted trial would have a discounted
     * price compared to regular billing cycle.
     */
    public const TRIAL = 'TRIAL';
}
