
# Bank Payment Token

Full representation of a Bank Payment Token.

## Structure

`BankPaymentToken`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `achDebit` | [`?ACHDebitResponse`](../../doc/models/ach-debit-response.md) | Optional | A Resource representing a response of vaulted a ACH Debit Account. | getAchDebit(): ?ACHDebitResponse | setAchDebit(?ACHDebitResponse achDebit): void |
| `sepaDebit` | [`?SEPADebitResponse`](../../doc/models/sepa-debit-response.md) | Optional | - | getSepaDebit(): ?SEPADebitResponse | setSepaDebit(?SEPADebitResponse sepaDebit): void |

## Example (as JSON)

```json
{
  "ach_debit": {
    "verification_status": "verification_status6"
  },
  "sepa_debit": {
    "iban_last_chars": "iban_last_chars8",
    "account_holder_name": {
      "key1": "val1",
      "key2": "val2"
    },
    "billing_address": {
      "address_line_1": "address_line_12",
      "address_line_2": "address_line_28",
      "admin_area_2": "admin_area_28",
      "admin_area_1": "admin_area_14",
      "postal_code": "postal_code0",
      "country_code": "country_code8"
    },
    "authorization_details": {
      "status": "NOT_SUPPORTED"
    }
  }
}
```

