
# Order Update Callback Error Response Details

The error details. Required for client-side `4XX` errors.

## Structure

`OrderUpdateCallbackErrorResponseDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `field` | `?string` | Optional | The field that caused the error. If this field is in the body, set this value to the field's JSON pointer value. Required for client-side errors.<br><br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `256`, *Pattern*: `^.*$` | getField(): ?string | setField(?string field): void |
| `value` | `?string` | Optional | The value of the field that caused the error.<br><br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `1024`, *Pattern*: `^.*$` | getValue(): ?string | setValue(?string value): void |
| `issue` | `string` | Required | The unique, fine-grained application-level error code.<br><br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `256`, *Pattern*: `^.*$` | getIssue(): string | setIssue(string issue): void |

## Example (as JSON)

```json
{
  "field": "field8",
  "value": "value6",
  "issue": "issue0"
}
```

