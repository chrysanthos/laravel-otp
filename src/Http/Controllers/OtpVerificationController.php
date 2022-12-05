<?php

namespace Chrysanthos\LaravelOtp\Http\Controllers;

use Chrysanthos\LaravelOtp\Support\OtpService;
use Illuminate\Foundation\Auth\User;
use Illuminate\Routing\Controller;
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

        $service = app(OtpService::class);

        $key = $service->generateKey($user);

        if ($service->check($user, request()->integer('otp-code'))) {
            Session::put($service->generateVerifiedKey($user), true);
            Session::forget($key);

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors('The OTP code is incorrect.');
    }

    public function resend()
    {
        /** @var User $user */
        $user = auth()->user();

        $service = app(OtpService::class);

        $service->generateOtpAndSend($user);

        return back()->with('status', 'The OTP has been resend.');
    }
}
