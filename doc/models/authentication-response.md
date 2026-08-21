
# Authentication Response

Results of Authentication such as 3D Secure.

## Structure

`AuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `liabilityShift` | [`?string(LiabilityShiftIndicator)`](../../doc/models/liability-shift-indicator.md) | Optional | Liability shift indicator. The outcome of the issuer's authentication.<br><br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getLiabilityShift(): ?string | setLiabilityShift(?string liabilityShift): void |
| `threeDSecure` | [`?ThreeDSecureAuthenticationResponse`](../../doc/models/three-d-secure-authentication-response.md) | Optional | Results of 3D Secure Authentication. | getThreeDSecure(): ?ThreeDSecureAuthenticationResponse | setThreeDSecure(?ThreeDSecureAuthenticationResponse threeDSecure): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AuthenticationResponseBuilder;
use PaypalServerSdkLib\Models\LiabilityShiftIndicator;
use PaypalServerSdkLib\Models\Builders\ThreeDSecureAuthenticationResponseBuilder;
use PaypalServerSdkLib\Models\PaResStatus;
use PaypalServerSdkLib\Models\EnrollmentStatus;

$authenticationResponse = AuthenticationResponseBuilder::init()
    ->liabilityShift(LiabilityShiftIndicator::NO)
    ->threeDSecure(
        ThreeDSecureAuthenticationResponseBuilder::init()
            ->authenticationStatus(PaResStatus::CHALLENGEREQUIRED)
            ->enrollmentStatus(EnrollmentStatus::ENROLLED)
            ->build()
    )
    ->build();
```

