<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models;

/**
 * The order status.
 */
class OrderStatus
{
    /**
     * The order was created with the specified context.
     */
    public const CREATED = 'CREATED';

    /**
     * The order was saved and persisted. The order status continues to be in progress until a capture is
     * made with final_capture = true for all purchase units within the order.
     */
    public const SAVED = 'SAVED';

    /**
     * The customer approved the payment through the PayPal wallet or another form of guest or unbranded
     * payment. For example, a card, bank account, or so on.
     */
    public const APPROVED = 'APPROVED';

    /**
     * All purchase units in the order are voided.
     */
    public const VOIDED = 'VOIDED';

    /**
     * The intent of the Order was completed and a `payments` resource was created. A completed Order may
     * have authorized a payment, captured an authorized payment, or in some cases, the payment may have
     * been declined. Please verify the payment status under purchase_unitsArray.payments before proceeding
     * with Order fulfillment.
     */
    public const COMPLETED = 'COMPLETED';

    /**
     * The order requires an action from the payer (e.g. 3DS authentication). Redirect the payer to the
     * "rel":"payer-action" HATEOAS link returned as part of the response prior to authorizing or capturing
     * the order. Some payment sources may not return a payer-action HATEOAS link (eg. MB WAY). For these
     * payment sources the payer-action is managed by the scheme itself (eg. through SMS, email, in-app
     * notification, etc).
     */
    public const PAYER_ACTION_REQUIRED = 'PAYER_ACTION_REQUIRED';
}
