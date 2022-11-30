<?php

namespace Chrysanthos\LaravelOtp\Http\Controllers;

use Chrysanthos\LaravelOtp\LaravelOtp;
use Illuminate\Foundation\Auth\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class OtpVerificationController extends Controller
{
    public function index()
    {
        return view('otp::otp');
    }

    public function send()
    {
        /** @var User $user */
        $user = auth()->user();

        $key = LaravelOtp::generateKey($user);

        if (request()->integer('otp-code') === (int) Session::get($key)) {
            Cache::put(LaravelOtp::generateVerifiedKey($user), true);
            Session::forget($key);

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors('The OTP code is incorrect.');
    }

    public function resend()
    {
        /** @var User $user */
        $user = Auth::user();

        $otp = Session::get(LaravelOtp::generateKey($user));

        $class = config('otp.notification');

        $user->notify(new $class($otp));

        return back()->with('status', 'The OTP has been resend.');
    }
}
