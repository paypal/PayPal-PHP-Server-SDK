
# Confirm Order Request

Payer confirms the intent to pay for the Order using the provided payment source.

## Structure

`ConfirmOrderRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentSource` | [`PaymentSource`](../../doc/models/payment-source.md) | Required | The payment source definition. | getPaymentSource(): PaymentSource | setPaymentSource(PaymentSource paymentSource): void |
| `processingInstruction` | [`?string(ProcessingInstruction)`](../../doc/models/processing-instruction.md) | Optional | The instruction to process an order. | getProcessingInstruction(): ?string | setProcessingInstruction(?string processingInstruction): void |
| `applicationContext` | [`?OrderConfirmApplicationContext`](../../doc/models/order-confirm-application-context.md) | Optional | Customizes the payer confirmation experience. | getApplicationContext(): ?OrderConfirmApplicationContext | setApplicationContext(?OrderConfirmApplicationContext applicationContext): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ConfirmOrderRequestBuilder;
use PaypalServerSdkLib\Models\Builders\PaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\CardRequestBuilder;
use PaypalServerSdkLib\Models\Builders\AddressBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneWithTypeBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberBuilder;
use PaypalServerSdkLib\Models\PhoneType;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\PaymentInitiator;
use PaypalServerSdkLib\Models\StoredPaymentSourcePaymentType;
use PaypalServerSdkLib\Models\StoredPaymentSourceUsageType;
use PaypalServerSdkLib\Models\Builders\NetworkTransactionBuilder;
use PaypalServerSdkLib\Models\CardBrand;
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
use PaypalServerSdkLib\Models\ProcessingInstruction;
use PaypalServerSdkLib\Models\Builders\OrderConfirmApplicationContextBuilder;
use PaypalServerSdkLib\Models\Builders\StoredPaymentSourceBuilder;

$confirmOrderRequest = ConfirmOrderRequestBuilder::init(
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
    ->processingInstruction(ProcessingInstruction::ORDER_COMPLETE_ON_PAYMENT_APPROVAL)
    ->applicationContext(
        OrderConfirmApplicationContextBuilder::init()
            ->brandName('brand_name8')
            ->locale('locale2')
            ->returnUrl('return_url0')
            ->cancelUrl('cancel_url2')
            ->storedPaymentSource(
                StoredPaymentSourceBuilder::init(
                    PaymentInitiator::CUSTOMER,
                    StoredPaymentSourcePaymentType::RECURRING
                )
                    ->usage(StoredPaymentSourceUsageType::FIRST)
                    ->previousNetworkTransactionReference(
                        NetworkTransactionBuilder::init()
                            ->id('id6')
                            ->date('date2')
                            ->network(CardBrand::CONFIDIS)
                            ->acquirerReferenceNumber('acquirer_reference_number8')
                            ->build()
                    )
                    ->build()
            )
            ->build()
    )
    ->build();
```

