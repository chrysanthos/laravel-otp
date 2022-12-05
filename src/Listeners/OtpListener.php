<?php

namespace Chrysanthos\LaravelOtp\Listeners;

use Chrysanthos\LaravelOtp\Support\OtpService;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Session;

class OtpListener
{
    public function clear(Logout $event)
    {
        Session::forget(
            app(OtpService::class)->generateVerifiedKey($event->user)
        );

        Session::forget(
            app(OtpService::class)->generateOtpSentKey($event->user)
        );
    }
}
