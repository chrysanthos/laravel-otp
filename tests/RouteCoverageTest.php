<?php

use Chrysanthos\LaravelOtp\Support\OtpService;

it('wildcard paths allows all routes', function () {
    $service = new OtpService;
    $this->app['config']->set('otp.paths', ['*']);

    $this->assertTrue($service->shouldCoverRoutePath('/test'));
    $this->assertTrue($service->shouldCoverRoutePath('/login'));
    $this->assertTrue($service->shouldCoverRoutePath('/register'));
    $this->assertTrue($service->shouldCoverRoutePath('/'));
});

it('only defined paths are checked', function () {
    $service = new OtpService;
    $this->app['config']->set('otp.paths', ['/login']);

    $this->assertFalse($service->shouldCoverRoutePath('/test'));
    $this->assertTrue($service->shouldCoverRoutePath('/login'));
    $this->assertFalse($service->shouldCoverRoutePath('/register'));
});
