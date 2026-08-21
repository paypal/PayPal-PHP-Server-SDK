
# Payment Instruction

Any additional payment instructions to be consider during payment processing. This processing instruction is applicable for Capturing an order or Authorizing an Order.

## Structure

`PaymentInstruction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `platformFees` | [`?(PlatformFee[])`](../../doc/models/platform-fee.md) | Optional | An array of various fees, commissions, tips, or donations. This field is only applicable to merchants that been enabled for PayPal Complete Payments Platform for Marketplaces and Platforms capability.<br><br>**Constraints**: *Minimum Items*: `0`, *Maximum Items*: `1` | getPlatformFees(): ?array | setPlatformFees(?array platformFees): void |
| `disbursementMode` | [`?string(DisbursementMode)`](../../doc/models/disbursement-mode.md) | Optional | The funds that are held on behalf of the merchant.<br><br>**Default**: `DisbursementMode::INSTANT`<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `16`, *Pattern*: `^[A-Z_]+$` | getDisbursementMode(): ?string | setDisbursementMode(?string disbursementMode): void |
| `payeePricingTierId` | `?string` | Optional | This field is only enabled for selected merchants/partners to use and provides the ability to trigger a specific pricing rate/plan for a payment transaction. The list of eligible 'payee_pricing_tier_id' would be provided to you by your Account Manager. Specifying values other than the one provided to you by your account manager would result in an error.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `20`, *Pattern*: `^.*$` | getPayeePricingTierId(): ?string | setPayeePricingTierId(?string payeePricingTierId): void |
| `payeeReceivableFxRateId` | `?string` | Optional | FX identifier generated returned by PayPal to be used for payment processing in order to honor FX rate (for eligible integrations) to be used when amount is settled/received into the payee account.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `4000`, *Pattern*: `^.*$` | getPayeeReceivableFxRateId(): ?string | setPayeeReceivableFxRateId(?string payeeReceivableFxRateId): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PaymentInstructionBuilder;
use PaypalServerSdkLib\Models\Builders\PlatformFeeBuilder;
use PaypalServerSdkLib\Models\Builders\MoneyBuilder;
use PaypalServerSdkLib\Models\Builders\PayeeBaseBuilder;
use PaypalServerSdkLib\Models\DisbursementMode;

$paymentInstruction = PaymentInstructionBuilder::init()
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
    ->payeePricingTierId('payee_pricing_tier_id0')
    ->payeeReceivableFxRateId('payee_receivable_fx_rate_id2')
    ->build();
```

