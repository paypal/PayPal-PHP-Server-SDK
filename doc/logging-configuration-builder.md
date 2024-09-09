
# LoggingConfigurationBuilder Class

Represents the logging configurations for API calls. Create instance using `LoggingConfigurationBuilder::init()`

## Methods

| Name | Parameter Type | Description |
|  --- | --- | --- |
| logger | `LoggerInterface` | Takes in your custom implementation of the Psr\Log\LoggerInterface.php. **Default Implementation : `ConsoleLogger`** |
| level | `string(LogLevel)` | Defines the log message severity mentioned in Psr\Log\LogLevel.php (e.g., DEBUG, INFO, etc). **Default : `logLevel::INFO`** |
| maskSensitiveHeaders | `bool` | Toggles the global setting to mask sensitive HTTP headers in both requests and responses before logging, safeguarding confidential data. **Default : `true`** |
| requestConfiguration | [`RequestLoggingConfigurationBuilder`](request-logging-configuration-builder.md) | The logging configurations for an API request. |
| responseConfiguration | [`RequestLoggingConfigurationBuilder`](response-logging-configuration-builder.md) | The logging configurations for an API response. |

## Usage Example

### Client Initialization with Custom Logger

In order to provide custom logger, any implementation of the `Psr\Log\LoggerInterface` can be used so that you can override the `log` behavior and provide its instance directly in the SDK client initialization.

The following example uses `Monolog\Logger` implementation of `Psr\Log\LoggerInterface` for PaypalServerSDKClient initialization.

```php
<?php

use PaypalServerSDKLib\PaypalServerSDKClientBuilder;
use PaypalServerSDKLib\Logging\LoggingConfigurationBuilder;
use PaypalServerSDKLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalServerSDKLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$logger = new Logger('PaypalServerSDK');
$logger->pushHandler(new StreamHandler(__DIR__ . '/api_data.log'));

// initialize the sdk client using this logger
$client = PaypalServerSDKClientBuilder::init()
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->logger($logger)
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();
```

