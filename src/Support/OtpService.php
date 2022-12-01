<?php

namespace Chrysanthos\LaravelOtp\Support;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class OtpService
{
    /**
     * @param  User  $user
     * @return void
     */
    public function generateOtpAndSend(User $user)
    {
        $otp = $this->generateRandomOtp();

        $this->storeOtpCode($this->generateKey($user), $otp);

        $class = config('otp.notification');

        $user->notify(new $class($otp));
    }

    public function generateRandomOtp(): int
    {
        return random_int(100001, 999999);
    }

    public function storeOtpCode(string $key, $otp)
    {
        Session::put($key, $otp);
    }

    public function check(User $user, $otp): bool
    {
        return (int) $otp === (int) Session::get($this->generateKey($user));
    }

    public function generateKey(Authenticatable $user): string
    {
        return get_class($user).'_'.$user->id;
    }

    public function generateVerifiedKey(Authenticatable $user): string
    {
        return get_class($user).'-'.$user->id.'2fa-verified';
    }

    public function generateOtpSentKey(Authenticatable $user): string
    {
        return get_class($user).'-'.$user->id.'otp-sent';
    }

    public function shouldCoverRoutePath(string $path): bool
    {
        $paths = Arr::wrap(config('otp.paths'));

        if (! is_array($paths) || ($paths[0] ?? null) === '*') {
            return true;
        }

        return in_array($path, $paths, true);
    }
}
