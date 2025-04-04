<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\CardSupplementaryData;
use PaypalServerSdkLib\Models\RiskSupplementaryData;
use PaypalServerSdkLib\Models\SupplementaryData;

/**
 * Builder for model SupplementaryData
 *
 * @see SupplementaryData
 */
class SupplementaryDataBuilder
{
    /**
     * @var SupplementaryData
     */
    private $instance;

    private function __construct(SupplementaryData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Supplementary Data Builder object.
     */
    public static function init(): self
    {
        return new self(new SupplementaryData());
    }

    /**
     * Sets card field.
     *
     * @param CardSupplementaryData|null $value
     */
    public function card(?CardSupplementaryData $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets risk field.
     *
     * @param RiskSupplementaryData|null $value
     */
    public function risk(?RiskSupplementaryData $value): self
    {
        $this->instance->setRisk($value);
        return $this;
    }

    /**
     * Initializes a new Supplementary Data object.
     */
    public function build(): SupplementaryData
    {
        return CoreHelper::clone($this->instance);
    }
}
