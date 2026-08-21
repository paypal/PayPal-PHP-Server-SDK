
# Create Subscription Request

The create subscription request details.

## Structure

`CreateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planId` | `string` | Required | The ID of the plan.<br><br>**Constraints**: *Minimum Length*: `26`, *Maximum Length*: `26`, *Pattern*: `^P-[A-Z0-9]*$` | getPlanId(): string | setPlanId(string planId): void |
| `startTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getStartTime(): ?string | setStartTime(?string startTime): void |
| `quantity` | `?string` | Optional | The quantity of the product in the subscription.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^([0-9]+\|([0-9]+)?[.][0-9]+)$` | getQuantity(): ?string | setQuantity(?string quantity): void |
| `shippingAmount` | [`?Money`](../../doc/models/money.md) | Optional | The currency and amount for a financial transaction, such as a balance or payment due. | getShippingAmount(): ?Money | setShippingAmount(?Money shippingAmount): void |
| `subscriber` | [`?SubscriberRequest`](../../doc/models/subscriber-request.md) | Optional | The subscriber request information . | getSubscriber(): ?SubscriberRequest | setSubscriber(?SubscriberRequest subscriber): void |
| `autoRenewal` | `?bool` | Optional | DEPRECATED. Indicates whether the subscription auto-renews after the billing cycles complete.<br><br>**Default**: `false` | getAutoRenewal(): ?bool | setAutoRenewal(?bool autoRenewal): void |
| `applicationContext` | [`?SubscriptionApplicationContext`](../../doc/models/subscription-application-context.md) | Optional | DEPRECATED. The application context, which customizes the payer experience during the subscription approval process with PayPal. | getApplicationContext(): ?SubscriptionApplicationContext | setApplicationContext(?SubscriptionApplicationContext applicationContext): void |
| `customId` | `?string` | Optional | The custom id for the subscription. Can be invoice id.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `127`, *Pattern*: `^[\x20-\x7E]+` | getCustomId(): ?string | setCustomId(?string customId): void |
| `plan` | [`?PlanOverride`](../../doc/models/plan-override.md) | Optional | An inline plan object to customise the subscription. You can override plan level default attributes by providing customised values for the subscription in this object. | getPlan(): ?PlanOverride | setPlan(?PlanOverride plan): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CreateSubscriptionRequestBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriberRequestBuilder;
use PaypalServerSdkLib\Models\Builders\NameBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingNameBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneNumberWithCountryCodeBuilder;
use PaypalServerSdkLib\Models\FulfillmentType;
use PaypalServerSdkLib\Models\Builders\ShippingOptionBuilder;
use PaypalServerSdkLib\Models\ShippingType;
use PaypalServerSdkLib\Models\Builders\SubscriptionPaymentSourceBuilder;
use PaypalServerSdkLib\Models\Builders\SubscriptionCardRequestBuilder;
use PaypalServerSdkLib\Models\CardType;

$createSubscriptionRequest = CreateSubscriptionRequestBuilder::init(
    'plan_id8'
)
    ->startTime('start_time0')
    ->quantity('quantity2')
    ->shippingAmount(
        MoneyBuilder::init(
            'currency_code0',
            'value6'
        )->build()
    )
    ->subscriber(
        SubscriberRequestBuilder::init()
            ->emailAddress('email_address8')
            ->payerId('payer_id8')
            ->name(
                NameBuilder::init()
                    ->givenName('given_name2')
                    ->surname('surname8')
                    ->build()
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
            ->paymentSource(
                SubscriptionPaymentSourceBuilder::init()
                    ->card(
                        SubscriptionCardRequestBuilder::init()
                            ->name('name6')
                            ->number('number6')
                            ->expiry('expiry4')
                            ->securityCode('security_code8')
                            ->type(CardType::UNKNOWN)
                            ->build()
                    )
                    ->build()
            )
            ->build()
    )
    ->autoRenewal(false)
    ->build();
```

