<?php

namespace Chrysanthos\LaravelOtp\Middleware;

use Chrysanthos\LaravelOtp\Support\OtpService;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RedirectToOtpPage
{
    /**
     * @return RedirectResponse|mixed|Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (! config('otp.enabled')) {
            return $next($request);
        }

        $user = $request->user();

        if (! $user) {
            return $next($request);
        }

        if (method_exists($user, 'shouldGoThroughOtp') && $user->shouldGoThroughOtp() === false) {
            return $next($request);
        }

        $otpService = app(OtpService::class);

        if (! $otpService->shouldCoverRoutePath($request->path())) {
            return $next($request);
        }

        if (! Session::has($otpService->generateVerifiedKey($user))) {
            if (! $otpService->optSendRecently($user)) {
                $otpService->generateOtpAndSend($user);
            }

            if ($request->header('X-Inertia') && function_exists('inertia')) {
                return inertia()->location(route('2fa.index'));
            }

            return redirect()->route('2fa.index');
        }

        return $next($request);
    }
}
