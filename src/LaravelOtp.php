<?php

namespace Chrysanthos\LaravelOtp;

use Illuminate\Contracts\Auth\Authenticatable;

class LaravelOtp
{
    public static function generateKey(Authenticatable $user): string
    {
        return get_class($user).'_'.$user->id;
    }

    public static function generateVerifiedKey(Authenticatable $user): string
    {
        return get_class($user).'-'.$user->id.'2fa-verified';
    }
}
