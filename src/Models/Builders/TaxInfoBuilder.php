<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\TaxInfo;

/**
 * Builder for model TaxInfo
 *
 * @see TaxInfo
 */
class TaxInfoBuilder
{
    /**
     * @var TaxInfo
     */
    private $instance;

    private function __construct(TaxInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tax Info Builder object.
     *
     * @param string $taxId
     * @param string $taxIdType
     */
    public static function init(string $taxId, string $taxIdType): self
    {
        return new self(new TaxInfo($taxId, $taxIdType));
    }

    /**
     * Initializes a new Tax Info object.
     */
    public function build(): TaxInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
