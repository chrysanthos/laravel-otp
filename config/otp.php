<?php

return [

    /**
     * Whether the package will register the routes and listeners.
     */
    'enabled' => false,

    /**
     * The logo image to be shown above otp input.
     */
    'logo' => null,

    /**
     * The notification to be sent to the logged-in user.
     * Override this with your own implementation so that
     * you can customize the channels, message format etc.
     */
    'notification' => \Chrysanthos\LaravelOtp\Notifications\SendOtpToUserNotification::class,

    /**
     * The paths that should be protected by otp. This must be
     * relative paths with no slashes at the start of the string.
     * Use this option in case you have admin login area with tools
     * like Nova/Backpack/Filament and only nedd otp in the main site
     *
     * Sadly the paths must point to the uri path of the route that the login form is submitted to.
     */
    'paths' => [
        '*',
    ],
];
