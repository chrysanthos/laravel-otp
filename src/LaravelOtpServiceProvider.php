<?php

namespace Chrysanthos\LaravelOtp;

use Chrysanthos\LaravelOtp\Listeners\OtpListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelOtpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-otp')
            ->hasConfigFile();

        if (config('otp.enabled')) {
            $package
                ->hasViews()
                ->hasRoutes('web');

            Event::listen(Login::class, [OtpListener::class, 'generate']);
            Event::listen(Logout::class, [OtpListener::class, 'clear']);
        }
    }
}
