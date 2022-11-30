<?php

namespace Chrysanthos\LaravelOtp\Middleware;

use Chrysanthos\LaravelOtp\LaravelOtp;
use Chrysanthos\LaravelOtp\Support\OtpService;
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

        if (Cache::missing(app(OtpService::class)->generateVerifiedKey($user))) {
            if ($request->header('X-Inertia')) {
                return inertia()->location(route('2fa.index'));
            }

            return redirect()->route('2fa.index');
        }

        return $next($request);
    }
}
