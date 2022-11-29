<?php

namespace Chrysanthos\LaravelOtp\Middleware;

use Chrysanthos\LaravelOtp\LaravelOtp;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class RedirectToOtpPage
{
    /**
     * @param  Request  $request
     * @param  Closure  $next
     * @return RedirectResponse|mixed|Response
     */
    public function handle(Request $request, Closure $next)
    {
        if (config('otp.enabled') && Cache::missing(LaravelOtp::generateVerifiedKey($request->user()))) {
            if ($request->header('X-Inertia')) {
                return inertia()->location(route('2fa.index'));
            }

            return redirect()->route('2fa.index');
        }

        return $next($request);
    }
}
