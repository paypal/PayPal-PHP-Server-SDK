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
 * The request-related [HATEOAS link](/api/rest/responses/#hateoas-links) information.
 */
class LinkDescription implements \JsonSerializable
{
    /**
     * @var string
     */
    private $href;

    /**
     * @var string
     */
    private $rel;

    /**
     * @var string|null
     */
    private $method;

    /**
     * @param string $href
     * @param string $rel
     */
    public function __construct(string $href, string $rel)
    {
        $this->href = $href;
        $this->rel = $rel;
    }

    /**
     * Returns Href.
     * The complete target URL. To make the related call, combine the method with this [URI Template-
     * formatted](https://tools.ietf.org/html/rfc6570) link. For pre-processing, include the `$`, `(`, and
     * `)` characters. The `href` is the key HATEOAS component that links a completed call with a
     * subsequent call.
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * Sets Href.
     * The complete target URL. To make the related call, combine the method with this [URI Template-
     * formatted](https://tools.ietf.org/html/rfc6570) link. For pre-processing, include the `$`, `(`, and
     * `)` characters. The `href` is the key HATEOAS component that links a completed call with a
     * subsequent call.
     *
     * @required
     * @maps href
     */
    public function setHref(string $href): void
    {
        $this->href = $href;
    }

    /**
     * Returns Rel.
     * The [link relation type](https://tools.ietf.org/html/rfc5988#section-4), which serves as an ID for a
     * link that unambiguously describes the semantics of the link. See [Link Relations](https://www.iana.
     * org/assignments/link-relations/link-relations.xhtml).
     */
    public function getRel(): string
    {
        return $this->rel;
    }

    /**
     * Sets Rel.
     * The [link relation type](https://tools.ietf.org/html/rfc5988#section-4), which serves as an ID for a
     * link that unambiguously describes the semantics of the link. See [Link Relations](https://www.iana.
     * org/assignments/link-relations/link-relations.xhtml).
     *
     * @required
     * @maps rel
     */
    public function setRel(string $rel): void
    {
        $this->rel = $rel;
    }

    /**
     * Returns Method.
     * The HTTP method required to make the related call.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * The HTTP method required to make the related call.
     *
     * @maps method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * Converts the LinkDescription object to a human-readable string representation.
     *
     * @return string The string representation of the LinkDescription object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LinkDescription',
            ['href' => $this->href, 'rel' => $this->rel, 'method' => $this->method]
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
        $json['href']       = $this->href;
        $json['rel']        = $this->rel;
        if (isset($this->method)) {
            $json['method'] = $this->method;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
