<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div
            class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100"
            style="padding-bottom: 200px"
    >
        @if($logoUrl = config('otp.logo'))
            <div>
                <a href="/">
                    <img src="{{ $logoUrl }}" alt="{{ config('app.name') }}" style="max-width: 300px;">
                </a>
            </div>
        @endif

        <div class="w-full max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @if (isset($errors) && $errors->any())
                <div class="mb-4">
                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('2fa.store') }}">
                @csrf

                <div>
                    <label for="otp-code" class="block font-medium text-sm text-gray-700">
                        {{ __('SMS Code') }}
                        <input type="text"
                               name="otp-code"
                               id="otp-code"
                               value=""
                               required autofocus
                               class="border border-gray-300 p-2 focus:border-gray-400 rounded-md shadow-sm block mt-1 w-full"
                        >
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button
                            type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                    >
                        {{ __('Log in') }}
                    </button>

                </div>
            </form>
        </div>
        <div class="max-w-md w-full flex align-center justify-around">
            <form method="POST" action="{{ route('2fa.resend') }}">
                @csrf

                <div class="flex items-center justify-end mt-4">

                    <button
                        type="submit"
                        class="inline-flex items-center rounded-md font-semibold text-xs text-gray-600 tracking-widest focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300"
                    >
                        {{ __('Resend OTP') }}
                    </button>

                </div>
            </form>

            @if(\Route::has('logout'))
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <div class="flex items-center justify-end mt-4">

                        <button
                            type="submit"
                            class="inline-flex items-center rounded-md font-semibold text-xs text-gray-600 tracking-widest focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300"
                        >
                            {{ __('Logout') }}
                        </button>

                    </div>
                </form>
            @endif
        </div>

    </div>

</div>
</body>
</html>
