
# Order Tracker Request

The tracking details of an order.

## Structure

`OrderTrackerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `trackingNumber` | `?string` | Optional | The tracking number for the shipment. This property supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getTrackingNumber(): ?string | setTrackingNumber(?string trackingNumber): void |
| `carrier` | [`?string(ShipmentCarrier)`](../../doc/models/shipment-carrier.md) | Optional | The carrier for the shipment. Some carriers have a global version as well as local subsidiaries. The subsidiaries are repeated over many countries and might also have an entry in the global list. Choose the carrier for your country. If the carrier is not available for your country, choose the global version of the carrier. If your carrier name is not in the list, set `carrier` to `OTHER` and set carrier name in `carrier_name_other`. For allowed values, see Carriers.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^[0-9A-Z_]+$` | getCarrier(): ?string | setCarrier(?string carrier): void |
| `carrierNameOther` | `?string` | Optional | The name of the carrier for the shipment. Provide this value only if the carrier parameter is OTHER. This property supports Unicode.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getCarrierNameOther(): ?string | setCarrierNameOther(?string carrierNameOther): void |
| `captureId` | `string` | Required | The PayPal capture ID.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9]*$` | getCaptureId(): string | setCaptureId(string captureId): void |
| `notifyPayer` | `?bool` | Optional | If true, PayPal will send an email notification to the payer of the PayPal transaction. The email contains the tracking details provided through the Orders tracking API request. Independent of any value passed for `notify_payer`, the payer may receive tracking notifications within the PayPal app, based on the user's notification preferences.<br><br>**Default**: `false` | getNotifyPayer(): ?bool | setNotifyPayer(?bool notifyPayer): void |
| `items` | [`?(OrderTrackerItem[])`](../../doc/models/order-tracker-item.md) | Optional | An array of details of items in the shipment. | getItems(): ?array | setItems(?array items): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\OrderTrackerRequestBuilder;
use PaypalServerSdkLib\Models\ShipmentCarrier;
use PaypalServerSdkLib\Models\Builders\OrderTrackerItemBuilder;

$orderTrackerRequest = OrderTrackerRequestBuilder::init(
    'capture_id2'
)
    ->trackingNumber('tracking_number8')
    ->carrier(ShipmentCarrier::POSTA_RO)
    ->carrierNameOther('carrier_name_other2')
    ->notifyPayer(false)
    ->items(
        [
            OrderTrackerItemBuilder::init()
                ->name('name8')
                ->quantity('quantity4')
                ->sku('sku6')
                ->url('url2')
                ->imageUrl('image_url4')
                ->build(),
            OrderTrackerItemBuilder::init()
                ->name('name8')
                ->quantity('quantity4')
                ->sku('sku6')
                ->url('url2')
                ->imageUrl('image_url4')
                ->build()
        ]
    )
    ->build();
```

