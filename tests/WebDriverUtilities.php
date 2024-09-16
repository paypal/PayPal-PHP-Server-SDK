<?php

namespace PaypalServerSDKLib\Tests;

use Exception;
use Facebook\WebDriver\Firefox\FirefoxOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;

class WebDriverUtilities
{
    /**
     * @throws Exception
     */
    public static function completePayment(string $checkoutUrl): void
    {
        $email = getenv('EMAIL');
        $pass = getenv('PASSWORD');
        if (!isset($email) || !isset($pass)) {
            throw new Exception('EMAIL or PASSWORD environment variable is not set');
        }

        $driver = self::getWebDriver();
        $driver->get($checkoutUrl);

        $elements = $driver->findElements(WebDriverBy::cssSelector('#email'));
        if (count($elements) > 0) {
            // If not logged in fill in the email
            $emailField = $elements[0];
            $emailField->clear();
            $emailField->sendKeys($email);

            $elements = $driver->findElements(WebDriverBy::cssSelector('#btnNext'));
            if (count($elements) > 0) {
                // Click the Next button if found
                $elements[0]->click();
            }

            // Wait for the login button
            $driver->wait(50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(
                    WebDriverBy::cssSelector('#btnLogin')
                )
            );

            // Fill in password and login
            $driver->findElement(WebDriverBy::cssSelector('#password'))->sendKeys($pass);
            $driver->findElement(WebDriverBy::cssSelector('#btnLogin'))->click();
        }

        // Wait for the payment button
        $driver->wait(50)->until(
            WebDriverExpectedCondition::visibilityOfElementLocated(
                WebDriverBy::cssSelector('#payment-submit-btn')
            )
        );

        // Click on payment submit button
        $driver->findElement(WebDriverBy::cssSelector('#payment-submit-btn'))->click();

        // Wait for the return URL
        $driver->wait(50)->until(
            WebDriverExpectedCondition::urlContains('https://example.com/returnUrl')
        );
    }

    /**
     * @throws Exception
     */
    public static function savePaymentMethod(string $url): void
    {
        $email = getenv('EMAIL');
        $pass = getenv('PASSWORD');
        if (!isset($email) || !isset($pass)) {
            throw new Exception('EMAIL or PASSWORD environment variable is not set');
        }

        $driver = self::getWebDriver();
        $driver->get($url);

        $elements = $driver->findElements(WebDriverBy::cssSelector('#email'));
        if (count($elements) > 0) {
            // If not logged in fill in the email
            $emailField = $elements[0];
            $emailField->sendKeys($email);

            $elements = $driver->findElements(WebDriverBy::cssSelector('#btnNext'));
            if (count($elements) > 0) {
                // Click the Next button if found
                $elements[0]->click();
            }

            // Wait for the login button
            $driver->wait(50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(
                    WebDriverBy::cssSelector('#btnLogin')
                )
            );

            // Fill in password and login
            $driver->findElement(WebDriverBy::cssSelector('#password'))->sendKeys($pass);
            $driver->findElement(WebDriverBy::cssSelector('#btnLogin'))->click();
        }

        usleep(10 * 1000000);

        $elements = $driver->findElements(WebDriverBy::cssSelector('#consentButton'));
        if (count($elements) > 0) {
            // Click the Consent button if found
            $elements[0]->click();
        } else {
            // Go back to the previous page
            $driver->navigate()->back();

            // Wait for the consent button
            $driver->wait(50)->until(
                WebDriverExpectedCondition::visibilityOfElementLocated(
                    WebDriverBy::cssSelector('#consentButton')
                )
            );

            // Click on consent button
            $driver->findElement(WebDriverBy::cssSelector('#consentButton'))->click();
        }

        // Wait for the return URL
        $driver->wait(50)->until(
            WebDriverExpectedCondition::urlContains('https://example.com/returnUrl')
        );
    }

    /**
     * @throws Exception
     */
    public static function completeHeliosVerification(string $checkoutUrl): void
    {
        $driver = self::getWebDriver();
        $driver->get($checkoutUrl);

        // Wait for the specific PayPal verification URL
        $driver->wait(50)->until(
            WebDriverExpectedCondition::urlContains(
                'https://www.sandbox.paypal.com/webapps/helios?action=verify&flow=3ds'
            )
        );

        // Wait until the outer iframe loads completely
        usleep(10 * 1000000); // wait 10 secs

        if (strpos($driver->getCurrentURL(), 'https://example.com/returnUrl') !== false) {
            return;
        }

        // Switch to the appropriate iframe
        $frame = $driver->switchTo()->frame(
            $driver->findElement(WebDriverBy::cssSelector('iframe[name="threedsIframeV2"]'))
        );

        $frame = $frame->switchTo()->frame(
            $driver->findElement(WebDriverBy::tagName('iframe'))
        );

        // Enter the verification code and submit
        $frame->findElement(WebDriverBy::cssSelector('input[placeholder=" Enter Code Here"]'))->sendKeys('1234');
        $submitButton = $frame->findElement(WebDriverBy::cssSelector('input[type="submit"][value="SUBMIT"]'));
        $driver->executeScript('arguments[0].scrollIntoView(true);', [$submitButton]);
        if ($submitButton->isDisplayed()) {
            $submitButton->click();
        }

        // Check for the return URL
        $driver->wait(50)->until(
            WebDriverExpectedCondition::urlContains('https://example.com/returnUrl')
        );
    }

    /**
     * @var RemoteWebDriver
     */
    private static $remoteWebDriver;

    /**
     * @throws Exception
     */
    private static function getWebDriver(int $tryCount = 3): RemoteWebDriver
    {
        if (!isset(self::$remoteWebDriver)) {
            $options = new FirefoxOptions();
            $options->addArguments(['--headless']);

            $capabilities = DesiredCapabilities::firefox();
            $capabilities->setCapability(FirefoxOptions::CAPABILITY, $options);

            try {
                self::$remoteWebDriver = RemoteWebDriver::create(
                    'http://localhost:4444',
                    $capabilities,
                    500000,
                    500000
                );
            } catch (Exception $exp) {
                if ($tryCount == 0) {
                    throw $exp;
                }
                return self::getWebDriver($tryCount - 1);
            }
        }
        return self::$remoteWebDriver;
    }
}
