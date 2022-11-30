<?php

namespace Chrysanthos\LaravelOtp\Listeners;

use Chrysanthos\LaravelOtp\Support\OtpService;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Cache;

class OtpListener
{
    public function generate(Login $event)
    {
        /** @var User $user */
        $user = $event->user;

        if (method_exists($user, 'shouldGoThroughOtp') && $user->shouldGoThroughOtp() === false) {
            return;
        }

        app(OtpService::class)->generateOtpAndSend($user);
    }

    public function clear(Logout $event)
    {
        Cache::forget(
            app(OtpService::class)->generateVerifiedKey($event->user)
        );
    }
}
