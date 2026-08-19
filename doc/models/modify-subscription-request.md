
# Modify Subscription Request

The request to update the quantity of the product or service in a subscription. You can also use this method to switch the plan and update the `shipping_amount` and `shipping_address` values for the subscription. This type of update requires the buyer's consent.

## Structure

`ModifySubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planId` | `?string` | Optional | The unique PayPal-generated ID for the plan.<br><br>**Constraints**: *Minimum Length*: `26`, *Maximum Length*: `26`, *Pattern*: `^P-[A-Z0-9]*$` | getPlanId(): ?string | setPlanId(?string planId): void |
| `quantity` | `?string` | Optional | The quantity of the product or service in the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^([0-9]+\|([0-9]+)?[.][0-9]+)$` | getQuantity(): ?string | setQuantity(?string quantity): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `shippingAddress` | [`?ShippingDetails`](../../doc/models/shipping-details.md) | Optional | The shipping details. | getShippingAddress(): ?ShippingDetails | setShippingAddress(?ShippingDetails shippingAddress): void |
| `applicationContext` | [`?SubscriptionPatchApplicationContext`](../../doc/models/subscription-patch-application-context.md) | Optional | The application context, which customizes the payer experience during the subscription approval process with PayPal. | getApplicationContext(): ?SubscriptionPatchApplicationContext | setApplicationContext(?SubscriptionPatchApplicationContext applicationContext): void |
| `plan` | [`?PlanOverride`](../../doc/models/plan-override.md) | Optional | An inline plan object to customise the subscription. You can override plan level default attributes by providing customised values for the subscription in this object. | getPlan(): ?PlanOverride | setPlan(?PlanOverride plan): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\ModifySubscriptionRequestBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\Builders\ShippingOptionBuilder;
use PaypalServerSdkLib\Models\ShippingType;
use PaypalServerSdkLib\Models\Builders\SubscriptionPatchApplicationContextBuilder;
use PaypalServerSdkLib\Models\ExperienceContextShippingPreference;
use PaypalServerSdkLib\Models\Builders\PaymentMethodBuilder;
use PaypalServerSdkLib\Models\PayeePaymentMethodPreference;

$modifySubscriptionRequest = ModifySubscriptionRequestBuilder::init()
    ->planId('plan_id0')
    ->quantity('quantity4')
    ->shippingAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->shippingAddress(
        ShippingDetailsBuilder::init()
            ->name(
                ShippingNameBuilder::init()
                    ->fullName('full_name6')
                    ->build()
            )
            ->emailAddress('email_address8')
            ->phoneNumber(
                PhoneNumberWithCountryCodeBuilder::init(
                    'country_code2',
                    'national_number6'
                )->build()
            )
            ->type(FulfillmentType::PICKUP_IN_STORE)
            ->options(
                [
                    ShippingOptionBuilder::init(
                        'id2',
                        'label2',
                        false
                    )
                        ->type(ShippingType::SHIPPING)
                        ->amount(
                            MoneyBuilder::init(
                                'currency_code6',
                                'value0'
                            )->build()
                        )->build()
                ]
            )->build()
    )
    ->applicationContext(
        SubscriptionPatchApplicationContextBuilder::init(
            'return_url0',
            'cancel_url2'
        )
            ->brandName('brand_name8')
            ->locale('locale2')
            ->shippingPreference(ExperienceContextShippingPreference::SET_PROVIDED_ADDRESS)
            ->paymentMethod(
                PaymentMethodBuilder::init()
                    ->payeePreferred(PayeePaymentMethodPreference::UNRESTRICTED)
                    ->build()
            )
            ->build()
    )
    ->build();
```

