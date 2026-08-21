
# Search Response

The search response information.

## Structure

`SearchResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionDetails` | [`?(TransactionDetails[])`](../../doc/models/transaction-details.md) | Optional | An array of transaction detail objects.<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `2147483647` | getTransactionDetails(): ?array | setTransactionDetails(?array transactionDetails): void |
| `accountNumber` | `?string` | Optional | The merchant account number.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[a-zA-Z0-9]*$` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `startDate` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getEndDate(): ?string | setEndDate(?string endDate): void |
| `lastRefreshedDatetime` | `?string` | Optional | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional. Note: The regular expression provides guidance but does not reject all invalid dates.<br><br>**Constraints**: *Minimum Length*: `20`, *Maximum Length*: `64`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])-(0[1-9]\|[1-2][0-9]\|3[0-1])[T,t]([0-1][0-9]\|2[0-3]):[0-5][0-9]:([0-5][0-9]\|60)([.][0-9]+)?([Zz]\|[+-][0-9]{2}:[0-9]{2})$` | getLastRefreshedDatetime(): ?string | setLastRefreshedDatetime(?string lastRefreshedDatetime): void |
| `page` | `?int` | Optional | A zero-relative index of transactions.<br><br>**Constraints**: `>= 0`, `<= 2147483647` | getPage(): ?int | setPage(?int page): void |
| `totalItems` | `?int` | Optional | The total number of transactions as an integer beginning with the specified `page` in the full result and not just in this response.<br><br>**Constraints**: `>= 0`, `<= 2147483647` | getTotalItems(): ?int | setTotalItems(?int totalItems): void |
| `totalPages` | `?int` | Optional | The total number of pages, as an `integer`, when the `total_items` is divided into pages of the specified `page_size`.<br><br>**Constraints**: `>= 0`, `<= 2147483647` | getTotalPages(): ?int | setTotalPages(?int totalPages): void |
| `links` | [`?(LinkDescription[])`](../../doc/models/link-description.md) | Optional, Read-only | An array of request-related [HATEOAS links](https://developer.paypal.com/api/rest/responses/#hateoas-links).<br><br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `32767` | getLinks(): ?array | setLinks(?array links): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\SearchResponseBuilder;
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

$searchResponse = SearchResponseBuilder::init()
    ->transactionDetails(
        [
            TransactionDetailsBuilder::init()
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
                ->build(),
            TransactionDetailsBuilder::init()
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
                ->build()
        ]
    )
    ->accountNumber('account_number4')
    ->startDate('start_date0')
    ->endDate('end_date6')
    ->lastRefreshedDatetime('last_refreshed_datetime8')
    ->build();
```

