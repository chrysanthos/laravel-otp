<?php

use Chrysanthos\LaravelOtp\Http\Controllers\OtpVerificationController;
use Illuminate\Support\Facades\Route;

Route::middleware(config('otp.middleware', 'web'))
    ->group(function () {
        Route::get('/login/verify-otp', [OtpVerificationController::class, 'index'])->name('2fa.index');
        Route::post('/login/verify-otp', [OtpVerificationController::class, 'send'])->name('2fa.store');
        Route::post('/login/verify-otp/resend', [OtpVerificationController::class, 'resend'])->name('2fa.resend');
    });
