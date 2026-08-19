
# Card Authentication Response

Results of Authentication such as 3D Secure.

## Structure

`CardAuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `threeDSecure` | [`?ThreeDSecureCardAuthenticationResponse`](../../doc/models/three-d-secure-card-authentication-response.md) | Optional | Results of 3D Secure Authentication. | getThreeDSecure(): ?ThreeDSecureCardAuthenticationResponse | setThreeDSecure(?ThreeDSecureCardAuthenticationResponse threeDSecure): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\CardAuthenticationResponseBuilder;
use PaypalServerSdkLib\Models\Builders\ThreeDSecureCardAuthenticationResponseBuilder;
use PaypalServerSdkLib\Models\PaResStatus;
use PaypalServerSdkLib\Models\EnrollmentStatus;

$cardAuthenticationResponse = CardAuthenticationResponseBuilder::init()
    ->threeDSecure(
        ThreeDSecureCardAuthenticationResponseBuilder::init()
            ->authenticationStatus(PaResStatus::CHALLENGEREQUIRED)
            ->enrollmentStatus(EnrollmentStatus::ENROLLED)
            ->authenticationId('authentication_id6')
            ->build()
    )
    ->build();
```

