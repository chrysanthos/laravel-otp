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
        <div>
            <a href="/">
                <svg class="w-16 h-16" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z"
                            fill="#6875F5"/>
                    <path
                            d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z"
                            fill="#6875F5"/>
                </svg>
            </a>
        </div>

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
                        {{ __('Sms Code') }}
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

    </div>

</div>
</body>
</html>
