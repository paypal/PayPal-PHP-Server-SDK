
# Native App Context

Merchant provided, buyer's native app preferences to app switch to the PayPal consumer app.

## Structure

`NativeAppContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `osType` | [`?string(OsType)`](../../doc/models/os-type.md) | Optional, Read-only | Operating System type of the device that the buyer is using.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `7`, *Pattern*: `^[A-Z_]+$` | getOsType(): ?string | setOsType(?string osType): void |
| `osVersion` | `?string` | Optional, Read-only | Operating System version of the device that the buyer is using.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^.*$` | getOsVersion(): ?string | setOsVersion(?string osVersion): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\NativeAppContextBuilder;

$nativeAppContext = NativeAppContextBuilder::init()->build();
```

