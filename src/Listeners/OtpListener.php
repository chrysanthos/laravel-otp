<?php

namespace Chrysanthos\LaravelOtp\Listeners;

use Chrysanthos\LaravelOtp\Support\OtpService;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class OtpListener
{
    public function generate(Login $event)
    {
        /** @var User $user */
        $user = $event->user;

        if (method_exists($user, 'shouldGoThroughOtp') && $user->shouldGoThroughOtp() === false) {
            return;
        }

        $service = app(OtpService::class);

        if (Session::get($key = $service->generateKey($user))) {
            return;
        }

        $otp = $service->generateRandomOtp();

        $service->storeOtpCode($key, $otp);

        $class = config('otp.notification');

        $user->notify(new $class($otp));
    }

    public function clear(Logout $event)
    {
        Cache::forget(
            app(OtpService::class)->generateVerifiedKey($event->user)
        );
    }
}
