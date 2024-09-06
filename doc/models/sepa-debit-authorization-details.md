
# SEPA Debit Authorization Details

Authorization details.

## Structure

`SEPADebitAuthorizationDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | [`?string(InstrumentAuthorizationStatus)`](../../doc/models/instrument-authorization-status.md) | Optional | The authorization status of the wallet instrument.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `100`, *Pattern*: `^[0-9A-Z_]+$` | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "status": "NOT_SUPPORTED"
}
```

