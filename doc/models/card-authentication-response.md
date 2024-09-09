
# Card Authentication Response

Results of Authentication such as 3D Secure.

## Structure

`CardAuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `threeDSecure` | [`?ThreeDSecureAuthenticationResponse`](../../doc/models/three-d-secure-authentication-response.md) | Optional | Results of 3D Secure Authentication. | getThreeDSecure(): ?ThreeDSecureAuthenticationResponse | setThreeDSecure(?ThreeDSecureAuthenticationResponse threeDSecure): void |

## Example (as JSON)

```json
{
  "three_d_secure": {
    "authentication_status": "C",
    "enrollment_status": "Y"
  }
}
```

