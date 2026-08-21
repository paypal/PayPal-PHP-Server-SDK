
# Patch

The JSON patch object to apply partial updates to resources.

## Structure

`Patch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `op` | [`string(PatchOp)`](../../doc/models/patch-op.md) | Required | The operation. | getOp(): string | setOp(string op): void |
| `path` | `?string` | Optional | The JSON Pointer to the target document location at which to complete the operation. | getPath(): ?string | setPath(?string path): void |
| `value` | `mixed` | Optional | The value to apply. The remove, copy, and move operations do not require a value. Since JSON Patch allows any type for value, the type property is not specified. | getValue(): | setValue( value): void |
| `from` | `?string` | Optional | The JSON Pointer to the target document location from which to move the value. Required for the move operation. | getFrom(): ?string | setFrom(?string from): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\PatchBuilder;
use PaypalServerSdkLib\Models\PatchOp;

$patch = PatchBuilder::init(
    PatchOp::COPY
)
    ->path('path4')
    ->value('{"key1":"val1","key2":"val2"}')
    ->from('from2')
    ->build();
```

