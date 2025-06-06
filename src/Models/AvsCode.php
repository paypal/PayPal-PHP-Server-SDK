<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * The address verification code for Visa, Discover, Mastercard, or American Express transactions.
 */
class AvsCode
{
    /**
     * For Visa, Mastercard, or Discover transactions, the address matches but the zip code does not match.
     * For American Express transactions, the card holder address is correct.
     */
    public const AVS_A = 'A';

    /**
     * For Visa, Mastercard, or Discover transactions, the address matches. International A.
     */
    public const AVS_B = 'B';

    /**
     * For Visa, Mastercard, or Discover transactions, no values match. International N.
     */
    public const AVS_C = 'C';

    /**
     * For Visa, Mastercard, or Discover transactions, the address and postal code match. International X.
     */
    public const AVS_D = 'D';

    /**
     * For Visa, Mastercard, or Discover transactions, not allowed for Internet or phone transactions. For
     * American Express card holder, the name is incorrect but the address and postal code match.
     */
    public const AVS_E = 'E';

    /**
     * For Visa, Mastercard, or Discover transactions, the address and postal code match. UK-specific X.
     * For American Express card holder, the name is incorrect but the address matches.
     */
    public const AVS_F = 'F';

    /**
     * For Visa, Mastercard, or Discover transactions, global is unavailable. Nothing matches.
     */
    public const AVS_G = 'G';

    /**
     * For Visa, Mastercard, or Discover transactions, international is unavailable. Not applicable.
     */
    public const AVS_I = 'I';

    /**
     * For Visa, Mastercard, or Discover transactions, the address and postal code match. For American
     * Express card holder, the name, address, and postal code match.
     */
    public const AVS_M = 'M';

    /**
     * For Visa, Mastercard, or Discover transactions, nothing matches. For American Express card holder,
     * the address and postal code are both incorrect.
     */
    public const AVS_N = 'N';

    /**
     * For Visa, Mastercard, or Discover transactions, postal international Z. Postal code only.
     */
    public const AVS_P = 'P';

    /**
     * For Visa, Mastercard, or Discover transactions, re-try the request. For American Express, the system
     * is unavailable.
     */
    public const AVS_R = 'R';

    /**
     * For Visa, Mastercard, Discover, or American Express, the service is not supported.
     */
    public const AVS_S = 'S';

    /**
     * For Visa, Mastercard, or Discover transactions, the service is unavailable. For American Express,
     * information is not available. For Maestro, the address is not checked or the acquirer had no
     * response. The service is not available.
     */
    public const AVS_U = 'U';

    /**
     * For Visa, Mastercard, or Discover transactions, whole ZIP code. For American Express, the card
     * holder name, address, and postal code are all incorrect.
     */
    public const AVS_W = 'W';

    /**
     * For Visa, Mastercard, or Discover transactions, exact match of the address and the nine-digit ZIP
     * code. For American Express, the card holder name, address, and postal code are all incorrect.
     */
    public const AVS_X = 'X';

    /**
     * For Visa, Mastercard, or Discover transactions, the address and five-digit ZIP code match. For
     * American Express, the card holder address and postal code are both correct.
     */
    public const AVS_Y = 'Y';

    /**
     * For Visa, Mastercard, or Discover transactions, the five-digit ZIP code matches but no address. For
     * American Express, only the card holder postal code is correct.
     */
    public const AVS_Z = 'Z';

    /**
     * For Maestro, no AVS response was obtained.
     */
    public const AVS_NULL = 'Null';

    /**
     * For Maestro, all address information matches.
     */
    public const AVS_0 = '0';

    /**
     * For Maestro, none of the address information matches.
     */
    public const AVS_1 = '1';

    /**
     * For Maestro, part of the address information matches.
     */
    public const AVS_2 = '2';

    /**
     * For Maestro, the merchant did not provide AVS information. It was not processed.
     */
    public const AVS_3 = '3';

    /**
     * For Maestro, the address was not checked or the acquirer had no response. The service is not
     * available.
     */
    public const AVS_4 = '4';
}
