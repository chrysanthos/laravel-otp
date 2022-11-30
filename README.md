# Login Otp for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrysanthos/laravel-otp.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-otp)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/chrysanthos/laravel-otp/run-tests?label=tests)](https://github.com/chrysanthos/laravel-otp/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/chrysanthos/laravel-otp/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/chrysanthos/laravel-otp/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrysanthos/laravel-otp.svg?style=flat-square)](https://packagist.org/packages/chrysanthos/laravel-otp)

This package lets you set up OTP verification on whenever a user is logged in.

## Installation

You can install the package via composer:

```bash
composer require chrysanthos/laravel-otp
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-otp-config"
```

This is the contents of the published config file:

```php
return [

    'enabled' => false,

    'notification' => \Chrysanthos\LaravelOtp\Notifications\SendOtpToUserNotification::class,

];
```

Optionally, you can publish the login view using

```bash
php artisan vendor:publish --tag="laravel-otp-views"
```

## Usage

Add the RedirectToOtpPage Middleware to the routes you wish to be protected by OTP.

```php
Route::middleware([
    'auth:sanctum',
    RedirectToOtpPage::class,
])->group(function () {
    Route::get('/dashboard', DashboardController::class);
});
```

Customize the notification you wish to be sent by changing the notification key in the config.
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
