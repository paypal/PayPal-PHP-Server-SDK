
# Card Request

The payment card to use to fund a payment. Can be a credit or debit card.<blockquote><strong>Note:</strong> Passing card number, cvv and expiry directly via the API requires <a href="https://www.pcisecuritystandards.org/pci_security/completing_self_assessment"> PCI SAQ D compliance</a>. <br>*PayPal offers a mechanism by which you do not have to take on the <strong>PCI SAQ D</strong> burden by using hosted fields - refer to <a href="https://developer.paypal.com/docs/checkout/advanced/integrate/">this Integration Guide</a>*.</blockquote>

## Structure

`CardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The card holder's name as it appears on the card.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `300`, *Pattern*: `^.{1,300}$` | getName(): ?string | setName(?string name): void |
| `number` | `?string` | Optional | The primary account number (PAN) for the payment card.<br>**Constraints**: *Minimum Length*: `13`, *Maximum Length*: `19`, *Pattern*: `^[0-9]{13,19}$` | getNumber(): ?string | setNumber(?string number): void |
| `expiry` | `?string` | Optional | The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).<br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{4}-(0[1-9]\|1[0-2])$` | getExpiry(): ?string | setExpiry(?string expiry): void |
| `securityCode` | `?string` | Optional | The three- or four-digit security code of the card. Also known as the CVV, CVC, CVN, CVE, or CID. This parameter cannot be present in the request when `payment_initiator=MERCHANT`.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{3,4}$` | getSecurityCode(): ?string | setSecurityCode(?string securityCode): void |
| `billingAddress` | [`?Address`](../../doc/models/address.md) | Optional | The portable international postal address. Maps to [AddressValidationMetadata](https://github.com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-controls-the-autocomplete-attribute). | getBillingAddress(): ?Address | setBillingAddress(?Address billingAddress): void |
| `attributes` | [`?CardAttributes`](../../doc/models/card-attributes.md) | Optional | Additional attributes associated with the use of this card. | getAttributes(): ?CardAttributes | setAttributes(?CardAttributes attributes): void |
| `vaultId` | `?string` | Optional | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getVaultId(): ?string | setVaultId(?string vaultId): void |
| `singleUseToken` | `?string` | Optional | The PayPal-generated, short-lived, one-time-use token, used to communicate payment information to PayPal for transaction processing.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9a-zA-Z_-]+$` | getSingleUseToken(): ?string | setSingleUseToken(?string singleUseToken): void |
| `storedCredential` | [`?CardStoredCredential`](../../doc/models/card-stored-credential.md) | Optional | Provides additional details to process a payment using a `card` that has been stored or is intended to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter compatibility:<br/><ul><li>`payment_type=ONE_TIME` is compatible only with `payment_initiator=CUSTOMER`.</li><li>`usage=FIRST` is compatible only with `payment_initiator=CUSTOMER`.</li><li>`previous_transaction_reference` or `previous_network_transaction_reference` is compatible only with `payment_initiator=MERCHANT`.</li><li>Only one of the parameters - `previous_transaction_reference` and `previous_network_transaction_reference` - can be present in the request.</li></ul> | getStoredCredential(): ?CardStoredCredential | setStoredCredential(?CardStoredCredential storedCredential): void |
| `networkToken` | [`?NetworkToken`](../../doc/models/network-token.md) | Optional | The Third Party Network token used to fund a payment. | getNetworkToken(): ?NetworkToken | setNetworkToken(?NetworkToken networkToken): void |
| `experienceContext` | [`?CardExperienceContext`](../../doc/models/card-experience-context.md) | Optional | Customizes the payer experience during the 3DS Approval for payment. | getExperienceContext(): ?CardExperienceContext | setExperienceContext(?CardExperienceContext experienceContext): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "number": "number4",
  "expiry": "expiry6",
  "security_code": "security_code0",
  "billing_address": {
    "address_line_1": "address_line_12",
    "address_line_2": "address_line_28",
    "admin_area_2": "admin_area_28",
    "admin_area_1": "admin_area_14",
    "postal_code": "postal_code0",
    "country_code": "country_code8"
  }
}
```

