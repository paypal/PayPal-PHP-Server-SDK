
# Subscription Billing Information

The billing details for the subscription. If the subscription was or is active, these fields are populated.

## Structure

`SubscriptionBillingInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `outstandingBalance` | [`Money`](../../doc/models/money.md) | Required | The currency and amount for a financial transaction, such as a balance or payment due. | getOutstandingBalance(): Money | setOutstandingBalance(Money outstandingBalance): void |
| `cycleExecutions` | [`?(CycleExecution[])`](../../doc/models/cycle-execution.md) | Optional, Read-only | The trial and regular billing executions.<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `3` | getCycleExecutions(): ?array | setCycleExecutions(?array cycleExecutions): void |
| `lastPayment` | [`?LastPaymentDetails`](../../doc/models/last-payment-details.md) | Optional | The details for the last payment. | getLastPayment(): ?LastPaymentDetails | setLastPayment(?LastPaymentDetails lastPayment): void |
| `nextBillingTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getNextBillingTime(): ?string | setNextBillingTime(?string nextBillingTime): void |
| `finalPaymentTime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getFinalPaymentTime(): ?string | setFinalPaymentTime(?string finalPaymentTime): void |
| `failedPaymentsCount` | `int` | Required, Read-only | The number of consecutive payment failures. Resets to `0` after a successful payment. If this reaches the `payment_failure_threshold` value, the subscription updates to the `SUSPENDED` state.<br><br>**Constraints**: `>= 0`, `<= 999` | getFailedPaymentsCount(): int | setFailedPaymentsCount(int failedPaymentsCount): void |
| `lastFailedPayment` | [`?FailedPaymentDetails`](../../doc/models/failed-payment-details.md) | Optional | The details for the failed payment of the subscription. | getLastFailedPayment(): ?FailedPaymentDetails | setLastFailedPayment(?FailedPaymentDetails lastFailedPayment): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SubscriptionBillingInformationBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\LastPaymentDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\FailedPaymentDetailsBuilder;

$subscriptionBillingInformation = SubscriptionBillingInformationBuilder::init(
    MoneyBuilder::init(
        'currency_code8',
        'value4'
    )->build(),
    0
)
    ->lastPayment(
        LastPaymentDetailsBuilder::init()
            ->amount(
                MoneyBuilder::init(
                    'currency_code6',
                    'value0'
                )->build()
            )
            ->time('time2')
            ->build()
    )
    ->nextBillingTime('next_billing_time2')
    ->finalPaymentTime('final_payment_time6')
    ->lastFailedPayment(
        FailedPaymentDetailsBuilder::init(
            MoneyBuilder::init(
                'currency_code6',
                'value0'
            )->build(),
            'time4'
        )
            ->nextPaymentRetryTime('next_payment_retry_time6')
            ->build()
    )
    ->build();
```

