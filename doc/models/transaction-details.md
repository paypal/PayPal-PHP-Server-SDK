
# Transaction Details

The transaction details.

## Structure

`TransactionDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionInfo` | [`?TransactionInformation`](../../doc/models/transaction-information.md) | Optional | The transaction information. | getTransactionInfo(): ?TransactionInformation | setTransactionInfo(?TransactionInformation transactionInfo): void |
| `payerInfo` | [`?PayerInformation`](../../doc/models/payer-information.md) | Optional | The payer information. | getPayerInfo(): ?PayerInformation | setPayerInfo(?PayerInformation payerInfo): void |
| `shippingInfo` | [`?ShippingInformation`](../../doc/models/shipping-information.md) | Optional | The shipping information. | getShippingInfo(): ?ShippingInformation | setShippingInfo(?ShippingInformation shippingInfo): void |
| `cartInfo` | [`?CartInformation`](../../doc/models/cart-information.md) | Optional | The cart information. | getCartInfo(): ?CartInformation | setCartInfo(?CartInformation cartInfo): void |
| `storeInfo` | [`?StoreInformation`](../../doc/models/store-information.md) | Optional | The store information. | getStoreInfo(): ?StoreInformation | setStoreInfo(?StoreInformation storeInfo): void |
| `auctionInfo` | [`?AuctionInformation`](../../doc/models/auction-information.md) | Optional | The auction information. | getAuctionInfo(): ?AuctionInformation | setAuctionInfo(?AuctionInformation auctionInfo): void |
| `incentiveInfo` | [`?IncentiveInformation`](../../doc/models/incentive-information.md) | Optional | The incentive details. | getIncentiveInfo(): ?IncentiveInformation | setIncentiveInfo(?IncentiveInformation incentiveInfo): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\TransactionDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\TransactionInformationBuilder;
use PaypalServerSdkLib\Models\PaypalReferenceIdType;
use PaypalServerSdkLib\Models\Builders\PayerInformationBuilder;
use PaypalServerSdkLib\Models\Builders\PhoneBuilder;
use PaypalServerSdkLib\Models\Builders\SimplePostalAddressCoarseGrainedBuilder;
use PaypalServerSdkLib\Models\Builders\ShippingInformationBuilder;
use PaypalServerSdkLib\Models\Builders\CartInformationBuilder;
use PaypalServerSdkLib\Models\Builders\ItemDetailsBuilder;
use PaypalServerSdkLib\Models\Builders\StoreInformationBuilder;

$transactionDetails = TransactionDetailsBuilder::init()
    ->transactionInfo(
        TransactionInformationBuilder::init()
            ->paypalAccountId('paypal_account_id4')
            ->paypalReferenceId('paypal_reference_id2')
            ->paypalReferenceIdType(PaypalReferenceIdType::ODR)
            ->transactionEventCode('transaction_event_code6')
            ->build()
    )
    ->payerInfo(
        PayerInformationBuilder::init()
            ->accountId('account_id2')
            ->emailAddress('email_address2')
            ->phoneNumber(
                PhoneBuilder::init(
                    'country_code2',
                    'national_number6'
                )
                    ->extensionNumber('extension_number8')
                    ->build()
            )
            ->addressStatus('address_status2')
            ->payerStatus('payer_status2')
            ->build()
    )
    ->shippingInfo(
        ShippingInformationBuilder::init()
            ->name('name0')
            ->method('method4')
            ->address(
                SimplePostalAddressCoarseGrainedBuilder::init(
                    'line18',
                    'city6',
                    'country_code6'
                )
                    ->line2('line20')
                    ->state('state2')
                    ->postalCode('postal_code8')
                    ->build()
            )
            ->secondaryShippingAddress(
                SimplePostalAddressCoarseGrainedBuilder::init(
                    'line16',
                    'city4',
                    'country_code4'
                )
                    ->line2('line28')
                    ->state('state0')
                    ->postalCode('postal_code6')
                    ->build()
            )
            ->build()
    )
    ->cartInfo(
        CartInformationBuilder::init()
            ->itemDetails(
                [
                    ItemDetailsBuilder::init()
                        ->itemCode('item_code0')
                        ->itemName('item_name8')
                        ->itemDescription('item_description4')
                        ->itemOptions('item_options2')
                        ->itemQuantity('item_quantity2')
                        ->build(),
                    ItemDetailsBuilder::init()
                        ->itemCode('item_code0')
                        ->itemName('item_name8')
                        ->itemDescription('item_description4')
                        ->itemOptions('item_options2')
                        ->itemQuantity('item_quantity2')
                        ->build()
                ]
            )
            ->taxInclusive(false)
            ->paypalInvoiceId('paypal_invoice_id6')
            ->build()
    )
    ->storeInfo(
        StoreInformationBuilder::init()
            ->storeId('store_id2')
            ->terminalId('terminal_id6')
            ->build()
    )
    ->build();
```

