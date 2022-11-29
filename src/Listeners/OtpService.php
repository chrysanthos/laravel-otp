<?php

namespace Chrysanthos\LaravelOtp\Listeners;

use Chrysanthos\LaravelOtp\LaravelOtp;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class OtpService
{
    public function generate(Authenticated $event)
    {
        /** @var User $user */
        $user = $event->user;

        $key = LaravelOtp::generateKey($user);

        if (Session::get($key)) {
            return;
        }

        Session::put($key, $otp = random_int(100001, 999999));

        $class = config('otp.notification');

        $user->notify(new $class($otp));
    }

    public function clear(Logout $event)
    {
        Cache::forget(LaravelOtp::generateVerifiedKey($event->user));
    }

    public function resend()
    {
        /** @var User $user */
        $user = Auth::user();

        $otp = Session::get(LaravelOtp::generateKey($user));

        $class = config('otp.notification');

        $user->notify(new $class($otp));
    }
}
