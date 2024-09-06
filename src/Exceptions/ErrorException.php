<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Exceptions;

/**
 * The error details.
 */
class ErrorException extends ApiException
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $messageProperty;

    /**
     * @var string
     */
    private $debugId;

    /**
     * @var \PayPalRESTAPIsLib\Models\ErrorDetails[]|null
     */
    private $details;

    /**
     * @var \PayPalRESTAPIsLib\Models\LinkDescription[]|null
     */
    private $links;

    /**
     * @param string $reason
     * @param \PayPalRESTAPIsLib\Http\HttpRequest $request
     * @param \PayPalRESTAPIsLib\Http\HttpResponse $response
     * @param string $name
     * @param string $messageProperty
     * @param string $debugId
     */
    public function __construct(
        string $reason,
        \PayPalRESTAPIsLib\Http\HttpRequest $request,
        \PayPalRESTAPIsLib\Http\HttpResponse $response,
        string $name,
        string $messageProperty,
        string $debugId
    ) {
        parent::__construct($reason, $request, $response);
        $this->name = $name;
        $this->messageProperty = $messageProperty;
        $this->debugId = $debugId;
    }

    /**
     * Returns Name.
     * The human-readable, unique name of the error.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The human-readable, unique name of the error.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Message Property.
     * The message that describes the error.
     */
    public function getMessageProperty(): string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     * The message that describes the error.
     *
     * @required
     * @maps message
     */
    public function setMessageProperty(string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Debug Id.
     * The PayPal internal ID. Used for correlation purposes.
     */
    public function getDebugId(): string
    {
        return $this->debugId;
    }

    /**
     * Sets Debug Id.
     * The PayPal internal ID. Used for correlation purposes.
     *
     * @required
     * @maps debug_id
     */
    public function setDebugId(string $debugId): void
    {
        $this->debugId = $debugId;
    }

    /**
     * Returns Details.
     * An array of additional details about the error.
     *
     * @return \PayPalRESTAPIsLib\Models\ErrorDetails[]|null
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * Sets Details.
     * An array of additional details about the error.
     *
     * @maps details
     *
     * @param \PayPalRESTAPIsLib\Models\ErrorDetails[]|null $details
     */
    public function setDetails(?array $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Links.
     * An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links).
     *
     * @return \PayPalRESTAPIsLib\Models\LinkDescription[]|null
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links).
     *
     * @maps links
     *
     * @param \PayPalRESTAPIsLib\Models\LinkDescription[]|null $links
     */
    public function setLinks(?array $links): void
    {
        $this->links = $links;
    }
}
