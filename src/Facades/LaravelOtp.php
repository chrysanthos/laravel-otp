<?php

namespace Chrysanthos\LaravelOtp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chrysanthos\LaravelOtp\LaravelOtp
 */
class LaravelOtp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Chrysanthos\LaravelOtp\LaravelOtp::class;
    }
}
