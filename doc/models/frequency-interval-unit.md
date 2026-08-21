
# Frequency Interval Unit

The interval unit at which the the usage limits will be reset.

## Enumeration

`FrequencyIntervalUnit`

## Fields

| Name | Description |
|  --- | --- |
| `DAY` | A daily cycle. |
| `WEEK` | A weekly cycle. |
| `MONTH` | A monthly cycle. |
| `YEAR` | A yearly cycle. |
| `LIFETIME` | The lifetime of the BA translates to 1 cycle |

## Example

```php
use PaypalServerSdkLib\Models\FrequencyIntervalUnit;

$frequencyIntervalUnit = FrequencyIntervalUnit::YEAR;
```

