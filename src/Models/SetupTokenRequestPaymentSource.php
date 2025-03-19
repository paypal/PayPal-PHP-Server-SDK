<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

use PaypalServerSdkLib\ApiHelper;
use stdClass;

/**
 * The payment method to vault with the instrument details.
 */
class SetupTokenRequestPaymentSource implements \JsonSerializable
{
    /**
     * @var SetupTokenRequestCard|null
     */
    private $card;

    /**
     * @var VaultPaypalWalletRequest|null
     */
    private $paypal;

    /**
     * @var VaultVenmoRequest|null
     */
    private $venmo;

    /**
     * @var VaultTokenRequest|null
     */
    private $token;

    /**
     * Returns Card.
     * A Resource representing a request to vault a Card.
     */
    public function getCard(): ?SetupTokenRequestCard
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * A Resource representing a request to vault a Card.
     *
     * @maps card
     */
    public function setCard(?SetupTokenRequestCard $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Paypal.
     * A resource representing a request to vault PayPal Wallet.
     */
    public function getPaypal(): ?VaultPaypalWalletRequest
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     * A resource representing a request to vault PayPal Wallet.
     *
     * @maps paypal
     */
    public function setPaypal(?VaultPaypalWalletRequest $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * Returns Venmo.
     */
    public function getVenmo(): ?VaultVenmoRequest
    {
        return $this->venmo;
    }

    /**
     * Sets Venmo.
     *
     * @maps venmo
     */
    public function setVenmo(?VaultVenmoRequest $venmo): void
    {
        $this->venmo = $venmo;
    }

    /**
     * Returns Token.
     * The Tokenized Payment Source representing a Request to Vault a Token.
     */
    public function getToken(): ?VaultTokenRequest
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * The Tokenized Payment Source representing a Request to Vault a Token.
     *
     * @maps token
     */
    public function setToken(?VaultTokenRequest $token): void
    {
        $this->token = $token;
    }

    /**
     * Converts the SetupTokenRequestPaymentSource object to a human-readable string representation.
     *
     * @return string The string representation of the SetupTokenRequestPaymentSource object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SetupTokenRequestPaymentSource',
            ['card' => $this->card, 'paypal' => $this->paypal, 'venmo' => $this->venmo, 'token' => $this->token]
        );
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
        if (isset($this->card)) {
            $json['card']   = $this->card;
        }
        if (isset($this->paypal)) {
            $json['paypal'] = $this->paypal;
        }
        if (isset($this->venmo)) {
            $json['venmo']  = $this->venmo;
        }
        if (isset($this->token)) {
            $json['token']  = $this->token;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
