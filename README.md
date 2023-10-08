# Login Otp for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrysanthos/laravel-otp.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-otp)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/chrysanthos/laravel-otp/run-tests.yml?branch=main&label=tests)](https://github.com/chrysanthos/laravel-otp/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/chrysanthos/laravel-otp/fix-php-code-style-issues.yml?branch=main&label=code%20style)](https://github.com/chrysanthos/laravel-otp/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrysanthos/laravel-otp.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-otp)

This package lets you set up an OTP verification process upon user login.

## Installation

You can install the package via composer:

```bash
composer require chrysanthos/laravel-otp
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-otp-config"
```

There are the contents of the published config file:

```php
return [

    /**
     * Whether the package will register the routes and listeners.
     */
    'enabled' => false,

    /**
     * The logo image to be shown above otp input.
     */
    'logo' => null,

    /**
     * The notification to be sent to the logged-in user.
     * Override this with your own implementation so that
     * you can customize the channels, message format etc.
     */
    'notification' => \Chrysanthos\LaravelOtp\Notifications\SendOtpToUserNotification::class,

    /**
     * The paths that should be protected by otp. This must be
     * relative paths with no slashes at the start of the string.
     * Use this option in case you have admin login area with tools
     * like Nova/Backpack/Filament and only nedd otp in the main site
     *
     * Sadly the paths must point to the uri path of the route that the login form is submitted to.
     */
    'paths' => [
        '*',
    ],
];
```

Optionally, you can publish the login view using

```bash
php artisan vendor:publish --tag="laravel-otp-views"
```

## Usage

Add the RedirectToOtpPage Middleware to the routes you wish to be protected by OTP.

```php
use Chrysanthos\LaravelOtp\Middleware\RedirectToOtpPage;

Route::middleware([
    'auth:sanctum',
    RedirectToOtpPage::class,
])->group(function () {
    Route::get('/dashboard', DashboardController::class);
});
```

You may customize the notification by changing the `notification` key in the config.
By setting the notification to a custom notification class you have full flexibility on how the notification is sent (Channels, Text, etc.)

```php
'notification' => \App\Notifications\YourCustomNotification::class,
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please contact me directly via email.

## Credits

- [Chrysanthos Prodromou](https://github.com/chrysanthos)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
