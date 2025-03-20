
# Order Update Callback Error Response

The error details.

## Structure

`OrderUpdateCallbackErrorResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The human-readable, unique name of the error.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `256`, *Pattern*: `^.*$` | getName(): string | setName(string name): void |
| `message` | `?string` | Optional | The message that describes the error.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `2048`, *Pattern*: `^.*$` | getMessage(): ?string | setMessage(?string message): void |
| `details` | [`?(OrderUpdateCallbackErrorResponseDetails[])`](../../doc/models/order-update-callback-error-response-details.md) | Optional | An array of additional details about the error.<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `100` | getDetails(): ?array | setDetails(?array details): void |

## Example (as JSON)

```json
{
  "name": "name2",
  "message": "message8",
  "details": [
    {
      "field": "field4",
      "value": "value2",
      "issue": "issue6"
    },
    {
      "field": "field4",
      "value": "value2",
      "issue": "issue6"
    }
  ]
}
```

