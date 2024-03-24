<?php

namespace Chrysanthos\LaravelOtp\Http\Controllers;

use Chrysanthos\LaravelOtp\Events\OtpVerificationFailedEvent;
use Chrysanthos\LaravelOtp\Support\OtpService;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class OtpVerificationController extends Controller
{
    public function index()
    {
        return view('otp::otp');
    }

    public function send(Request $request)
    {
        $request->validate([
            'otp-code-1' => ['required', 'integer', 'min:0', 'max:9'],
            'otp-code-2' => ['required', 'integer', 'min:0', 'max:9'],
            'otp-code-3' => ['required', 'integer', 'min:0', 'max:9'],
            'otp-code-4' => ['required', 'integer', 'min:0', 'max:9'],
            'otp-code-5' => ['required', 'integer', 'min:0', 'max:9'],
            'otp-code-6' => ['required', 'integer', 'min:0', 'max:9'],
        ]);

        $otp = $request->get('otp-code-1')
            .$request->get('otp-code-2')
            .$request->get('otp-code-3')
            .$request->get('otp-code-4')
            .$request->get('otp-code-5')
            .$request->get('otp-code-6');

        /** @var User $user */
        $user = auth()->user();

        $service = app(OtpService::class);

        $key = $service->generateKey($user);

        if ($service->check($user, $otp)) {
            Session::put($service->generateVerifiedKey($user), true);
            Session::forget($key);

            return redirect()->intended('/dashboard');
        }

        event(new OtpVerificationFailedEvent($user));

        return back()->withErrors('The OTP code is incorrect.');
    }

    public function resend()
    {
        /** @var User $user */
        $user = auth()->user();

        $service = app(OtpService::class);

        $service->generateOtpAndSend($user);

        return back()->with('status', 'The OTP has been resent.');
    }
}
