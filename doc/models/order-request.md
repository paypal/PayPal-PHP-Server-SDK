
# Order Request

The order request details.

## Structure

`OrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `intent` | [`string(CheckoutPaymentIntent)`](../../doc/models/checkout-payment-intent.md) | Required | The intent to either capture payment immediately or authorize a payment for an order after order creation. | getIntent(): string | setIntent(string intent): void |
| `processingInstruction` | [`?string(ProcessingInstruction)`](../../doc/models/processing-instruction.md) | Optional | The instruction to process an order. | getProcessingInstruction(): ?string | setProcessingInstruction(?string processingInstruction): void |
| `payer` | [`?Payer`](../../doc/models/payer.md) | Optional | DEPRECATED. The customer is also known as the payer. The Payer object was intended to only be used with the `payment_source.paypal` object. In order to make this design more clear, the details in the `payer` object are now available under `payment_source.paypal`. Please use `payment_source.paypal`. | getPayer(): ?Payer | setPayer(?Payer payer): void |
| `purchaseUnits` | [`PurchaseUnitRequest[]`](../../doc/models/purchase-unit-request.md) | Required | An array of purchase units. Each purchase unit establishes a contract between a payer and the payee. Each purchase unit represents either a full or partial order that the payer intends to purchase from the payee.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `10` | getPurchaseUnits(): array | setPurchaseUnits(array purchaseUnits): void |
| `paymentSource` | [`?PaymentSource`](../../doc/models/payment-source.md) | Optional | The payment source definition. | getPaymentSource(): ?PaymentSource | setPaymentSource(?PaymentSource paymentSource): void |
| `applicationContext` | [`?OrderApplicationContext`](../../doc/models/order-application-context.md) | Optional | Customizes the payer experience during the approval process for the payment with PayPal. Note: Partners and Marketplaces might configure brand_name and shipping_preference during partner account setup, which overrides the request values. | getApplicationContext(): ?OrderApplicationContext | setApplicationContext(?OrderApplicationContext applicationContext): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderRequestBuilder;
use PaypalServerSdkLib\Models\CheckoutPaymentIntent;
use PaypalServerSdkLib\Models\Builders\PurchaseUnitRequestBuilder;
use PaypalServerSdkLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\AmountBreakdownBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentInstructionBuilder;
use PaypalServerSdkLib\Models\Builders\PlatformFeeBuilder;
use PaypalServerSdkLib\Models\DisbursementMode;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\ProcessingInstruction;
use PaypalServerSdkLib\Models\Builders\PayerBuilder;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\PaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardRequestBuilder;
use PaypalServerSdkLib\Models\Builders\TokenBuilder;
use PaypalServerSdkLib\Models\TokenType;
use PaypalServerSdkLib\Models\Builders\PaypalWalletBuilder;
use PaypalServerSdkLib\Models\Builders\BancontactPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\ExperienceContextBuilder;
use PaypalServerSdkLib\Models\ExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\BlikPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\BlikExperienceContextBuilder;
use PaypalServerSdkLib\Models\Builders\BlikLevel0PaymentObjectBuilder;
use PaypalServerSdkLib\Models\Builders\BlikOneClickPaymentRequestBuilder;
use PaypalServerSdkLib\Models\Builders\OrderApplicationContextBuilder;
use PaypalServerSdkLib\Models\OrderApplicationContextLandingPage;
use PaypalServerSdkLib\Models\OrderApplicationContextShippingPreference;
use PaypalServerSdkLib\Models\OrderApplicationContextUserAction;

$orderRequest = OrderRequestBuilder::init(
    CheckoutPaymentIntent::CAPTURE,
    [
        PurchaseUnitRequestBuilder::init(
            AmountWithBreakdownBuilder::init(
                'currency_code6',
                'value0'
            )
                ->breakdown(
                    AmountBreakdownBuilder::init()
                        ->itemTotal(
                            MoneyBuilder::init(
                                'currency_code0',
                                'value6'
                            )->build()
                        )
                        ->shipping(
                            MoneyBuilder::init(
                                'currency_code0',
                                'value6'
                            )->build()
                        )
                        ->handling(
                            MoneyBuilder::init(
                                'currency_code2',
                                'value8'
                            )->build()
                        )
                        ->taxTotal(
                            MoneyBuilder::init(
                                'currency_code4',
                                'value0'
                            )->build()
                        )
                        ->insurance(
                            MoneyBuilder::init(
                                'currency_code2',
                                'value8'
                            )->build()
                        )->build()
                )->build()
        )
            ->referenceId('reference_id4')
            ->payee(
                PayeeBaseBuilder::init()
                    ->emailAddress('email_address4')
                    ->merchantId('merchant_id6')
                    ->build()
            )
            ->paymentInstruction(
                PaymentInstructionBuilder::init()
                    ->platformFees(
                        [
                            PlatformFeeBuilder::init(
                                MoneyBuilder::init(
                                    'currency_code6',
                                    'value0'
                                )->build()
                            )
                                ->payee(
                                    PayeeBaseBuilder::init()
                                        ->emailAddress('email_address4')
                                        ->merchantId('merchant_id6')
                                        ->build()
                                )
                                ->build(),
                            PlatformFeeBuilder::init(
                                MoneyBuilder::init(
                                    'currency_code6',
                                    'value0'
                                )->build()
                            )
                                ->payee(
                                    PayeeBaseBuilder::init()
                                        ->emailAddress('email_address4')
                                        ->merchantId('merchant_id6')
                                        ->build()
                                )
                                ->build(),
                            PlatformFeeBuilder::init(
                                MoneyBuilder::init(
                                    'currency_code6',
                                    'value0'
                                )->build()
                            )
                                ->payee(
                                    PayeeBaseBuilder::init()
                                        ->emailAddress('email_address4')
                                        ->merchantId('merchant_id6')
                                        ->build()
                                )
                                ->build()
                        ]
                    )
                    ->disbursementMode(DisbursementMode::INSTANT)
                    ->payeePricingTierId('payee_pricing_tier_id2')
                    ->payeeReceivableFxRateId('payee_receivable_fx_rate_id0')
                    ->build()
            )
            ->description('description6')
            ->customId('custom_id4')
            ->build()
    ]
)
    ->processingInstruction(ProcessingInstruction::ORDER_COMPLETE_ON_PAYMENT_APPROVAL)
    ->payer(
        PayerBuilder::init()
            ->emailAddress('email_address6')
            ->payerId('payer_id6')
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
            )
            ->phone(
                PhoneWithTypeBuilder::init(
                    PhoneNumberBuilder::init(
                        'national_number6'
                    )->build()
                )
                    ->phoneType(PhoneType::OTHER)
                    ->build()
            )
            ->birthDate('birth_date4')
            ->build()
    )
    ->paymentSource(
        PaymentSourceBuilder::init()
            ->card(
                CardRequestBuilder::init()
                    ->name('name6')
                    ->number('number6')
                    ->expiry('expiry4')
                    ->securityCode('security_code8')
                    ->billingAddress(
                        AddressBuilder::init(
                            'country_code8'
                        )
                            ->addressLine1('address_line_12')
                            ->addressLine2('address_line_28')
                            ->adminArea2('admin_area_28')
                            ->adminArea1('admin_area_14')
                            ->postalCode('postal_code0')
                            ->build()
                    )
                    ->build()
            )
            ->token(
                TokenBuilder::init(
                    'id6',
                    TokenType::BILLING_AGREEMENT
                )->build()
            )
            ->paypal(
                PaypalWalletBuilder::init()
                    ->vaultId('vault_id0')
                    ->emailAddress('email_address0')
                    ->name(
                        NameBuilder::init()
                            ->givenName('given_name2')
                            ->surname('surname8')
                            ->build()
                    )
                    ->phone(
                        PhoneWithTypeBuilder::init(
                            PhoneNumberBuilder::init(
                                'national_number6'
                            )->build()
                        )
                            ->phoneType(PhoneType::OTHER)
                            ->build()
                    )
                    ->birthDate('birth_date8')
                    ->build()
            )
            ->bancontact(
                BancontactPaymentRequestBuilder::init(
                    'name0',
                    'country_code0'
                )
                    ->experienceContext(
                        ExperienceContextBuilder::init()
                            ->brandName('brand_name2')
                            ->locale('locale6')
                            ->shippingPreference(ExperienceContextShippingPreference::NO_SHIPPING)
                            ->returnUrl('return_url4')
                            ->cancelUrl('cancel_url6')
                            ->build()
                    )
                    ->build()
            )
            ->blik(
                BlikPaymentRequestBuilder::init(
                    'name2',
                    'country_code2'
                )
                    ->email('email4')
                    ->experienceContext(
                        BlikExperienceContextBuilder::init()
                            ->brandName('brand_name2')
                            ->locale('locale6')
                            ->shippingPreference(ExperienceContextShippingPreference::NO_SHIPPING)
                            ->returnUrl('return_url4')
                            ->cancelUrl('cancel_url6')
                            ->build()
                    )
                    ->level0(
                        BlikLevel0PaymentObjectBuilder::init(
                            'auth_code8'
                        )->build()
                    )
                    ->oneClick(
                        BlikOneClickPaymentRequestBuilder::init(
                            'consumer_reference2'
                        )
                            ->authCode('auth_code0')
                            ->aliasLabel('alias_label6')
                            ->aliasKey('alias_key4')
                            ->build()
                    )
                    ->build()
            )
            ->build()
    )
    ->applicationContext(
        OrderApplicationContextBuilder::init()
            ->brandName('brand_name8')
            ->locale('locale2')
            ->landingPage(OrderApplicationContextLandingPage::BILLING)
            ->shippingPreference(OrderApplicationContextShippingPreference::SET_PROVIDED_ADDRESS)
            ->userAction(OrderApplicationContextUserAction::CONTINUE_)
            ->build()
    )
    ->build();
```

