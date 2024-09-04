
# Standard Entry Class Code

NACHA (the regulatory body governing the ACH network) requires that API callers (merchants, partners) obtain the consumer’s explicit authorization before initiating a transaction. To stay compliant, you’ll need to make sure that you retain a compliant authorization for each transaction that you originate to the ACH Network using this API. ACH transactions are categorized (using SEC codes) by how you capture authorization from the Receiver (the person whose bank account is being debited or credited). PayPal supports the following SEC codes.

## Enumeration

`StandardEntryClassCode`

## Fields

| Name |
|  --- |
| `TEL` |
| `WEB` |
| `CCD` |
| `PPD` |

