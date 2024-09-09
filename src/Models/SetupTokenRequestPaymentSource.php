<?php

declare(strict_types=1);

/*
 * PaypalServerSDKLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSDKLib\Models;

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
     * @var VaultPayPalWalletRequest|null
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
    public function getPaypal(): ?VaultPayPalWalletRequest
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     * A resource representing a request to vault PayPal Wallet.
     *
     * @maps paypal
     */
    public function setPaypal(?VaultPayPalWalletRequest $paypal): void
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
