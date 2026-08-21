
# App Switch Context

Merchant provided details of the native app or mobile web browser to facilitate buyer's app switch to the PayPal consumer app.

## Structure

`AppSwitchContext`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nativeApp` | [`?NativeAppContext`](../../doc/models/native-app-context.md) | Optional | Merchant provided, buyer's native app preferences to app switch to the PayPal consumer app. | getNativeApp(): ?NativeAppContext | setNativeApp(?NativeAppContext nativeApp): void |
| `mobileWeb` | [`?MobileWebContext`](../../doc/models/mobile-web-context.md) | Optional | Buyer's mobile web browser context to app switch to the PayPal consumer app. | getMobileWeb(): ?MobileWebContext | setMobileWeb(?MobileWebContext mobileWeb): void |

## Example

```php
use PaypalServerSdkLib\Models\Builders\AppSwitchContextBuilder;
use PaypalServerSdkLib\Models\Builders\NativeAppContextBuilder;
use PaypalServerSdkLib\Models\Builders\MobileWebContextBuilder;

$appSwitchContext = AppSwitchContextBuilder::init()
    ->nativeApp(
        NativeAppContextBuilder::init()->build()
    )
    ->mobileWeb(
        MobileWebContextBuilder::init()
            ->buyerUserAgent('buyer_user_agent8')
            ->build()
    )
    ->build();
```

