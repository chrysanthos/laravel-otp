<?php

namespace Chrysanthos\LaravelOtp\Support;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Session;

class OtpService
{
    public function generateRandomOtp(): int
    {
        return random_int(100001, 999999);
    }

    public function storeOtpCode(string $key, $otp)
    {
        Session::put($key, $otp);
    }

    public function generateKey(Authenticatable $user): string
    {
        return get_class($user).'_'.$user->id;
    }

    public function generateVerifiedKey(Authenticatable $user): string
    {
        return get_class($user).'-'.$user->id.'2fa-verified';
    }
}
