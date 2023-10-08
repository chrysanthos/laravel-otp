<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <style> *, ::before, ::after {box-sizing: border-box;border-width: 0;border-style: solid;border-color: #e5e7eb;}::before, ::after {--tw-content: '';}html {line-height: 1.5;-webkit-text-size-adjust: 100%;-moz-tab-size: 4;tab-size: 4;font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings: normal;font-variation-settings: normal;}body {margin: 0;line-height: inherit;}hr {height: 0;color: inherit;border-top-width: 1px;}abbr:where([title]) {-webkit-text-decoration: underline dotted;text-decoration: underline dotted;}h1, h2, h3, h4, h5, h6 {font-size: inherit;font-weight: inherit;}a {color: inherit;text-decoration: inherit;}b, strong {font-weight: bolder;}code, kbd, samp, pre {font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size: 1em;}small {font-size: 80%;}sub, sup {font-size: 75%;line-height: 0;position: relative;vertical-align: baseline;}sub {bottom: -0.25em;}sup {top: -0.5em;}table {text-indent: 0;border-color: inherit;border-collapse: collapse;}button, input, optgroup, select, textarea {font-family: inherit;font-feature-settings: inherit;font-variation-settings: inherit;font-size: 100%;font-weight: inherit;line-height: inherit;color: inherit;margin: 0;padding: 0;}button, select {text-transform: none;}button, [type='button'], [type='reset'], [type='submit'] {-webkit-appearance: button;background-color: transparent;background-image: none;}:-moz-focusring {outline: auto;}:-moz-ui-invalid {box-shadow: none;}progress {vertical-align: baseline;}::-webkit-inner-spin-button, ::-webkit-outer-spin-button {height: auto;}[type='search'] {-webkit-appearance: textfield;outline-offset: -2px;}::-webkit-search-decoration {-webkit-appearance: none;}::-webkit-file-upload-button {-webkit-appearance: button;font: inherit;}summary {display: list-item;}blockquote, dl, dd, h1, h2, h3, h4, h5, h6, hr, figure, p, pre {margin: 0;}fieldset {margin: 0;padding: 0;}legend {padding: 0;}ol, ul, menu {list-style: none;margin: 0;padding: 0;}dialog {padding: 0;}textarea {resize: vertical;}input::placeholder, textarea::placeholder {opacity: 1;color: #9ca3af;}button, [role="button"] {cursor: pointer;}:disabled {cursor: default;}img, svg, video, canvas, audio, iframe, embed, object {display: block;vertical-align: middle;}img, video {max-width: 100%;height: auto;}[hidden] {display: none;}*, ::before, ::after {--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / 0.5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop {--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / 0.5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.mb-4 {margin-bottom: 1rem }.mt-1 {margin-top: 0.25rem }.mt-3 {margin-top: 0.75rem }.mt-4 {margin-top: 1rem }.mt-6 {margin-top: 1.5rem }.block {display: block }.flex {display: flex }.inline-flex {display: inline-flex }.min-h-screen {min-height: 100vh }.w-full {width: 100% }.max-w-md {max-width: 28rem }.list-inside {list-style-position: inside }.list-disc {list-style-type: disc }.flex-col {flex-direction: column }.items-center {align-items: center }.justify-end {justify-content: flex-end }.justify-center {justify-content: center }.justify-around {justify-content: space-around }.overflow-hidden {overflow: hidden }.rounded-md {border-radius: 0.375rem }.border {border-width: 1px }.border-gray-300 {--tw-border-opacity: 1;border-color: rgb(209 213 219 / var(--tw-border-opacity)) }.border-transparent {border-color: transparent }.bg-gray-100 {--tw-bg-opacity: 1;background-color: rgb(243 244 246 / var(--tw-bg-opacity)) }.bg-gray-800 {--tw-bg-opacity: 1;background-color: rgb(31 41 55 / var(--tw-bg-opacity)) }.bg-white {--tw-bg-opacity: 1;background-color: rgb(255 255 255 / var(--tw-bg-opacity)) }.p-2 {padding: 0.5rem }.px-4 {padding-left: 1rem;padding-right: 1rem }.px-6 {padding-left: 1.5rem;padding-right: 1.5rem }.py-2 {padding-top: 0.5rem;padding-bottom: 0.5rem }.py-4 {padding-top: 1rem;padding-bottom: 1rem }.pt-6 {padding-top: 1.5rem }.font-sans {font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" }.text-sm {font-size: 0.875rem;line-height: 1.25rem }.text-xs {font-size: 0.75rem;line-height: 1rem }.font-medium {font-weight: 500 }.font-semibold {font-weight: 600 }.uppercase {text-transform: uppercase }.tracking-widest {letter-spacing: 0.1em }.text-gray-600 {--tw-text-opacity: 1;color: rgb(75 85 99 / var(--tw-text-opacity)) }.text-gray-700 {--tw-text-opacity: 1;color: rgb(55 65 81 / var(--tw-text-opacity)) }.text-gray-900 {--tw-text-opacity: 1;color: rgb(17 24 39 / var(--tw-text-opacity)) }.text-green-600 {--tw-text-opacity: 1;color: rgb(22 163 74 / var(--tw-text-opacity)) }.text-red-600 {--tw-text-opacity: 1;color: rgb(220 38 38 / var(--tw-text-opacity)) }.text-white {--tw-text-opacity: 1;color: rgb(255 255 255 / var(--tw-text-opacity)) }.antialiased {-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale }.shadow-md {--tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) }.shadow-sm {--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) }.transition {transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);transition-duration: 150ms }.hover\:bg-gray-700:hover {--tw-bg-opacity: 1;background-color: rgb(55 65 81 / var(--tw-bg-opacity)) }.focus\:border-gray-400:focus {--tw-border-opacity: 1;border-color: rgb(156 163 175 / var(--tw-border-opacity)) }.focus\:border-gray-900:focus {--tw-border-opacity: 1;border-color: rgb(17 24 39 / var(--tw-border-opacity)) }.focus\:outline-none:focus {outline: 2px solid transparent;outline-offset: 2px }.focus\:ring:focus {--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000) }.focus\:ring-gray-300:focus {--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity)) }.active\:bg-gray-900:active {--tw-bg-opacity: 1;background-color: rgb(17 24 39 / var(--tw-bg-opacity)) }.disabled\:opacity-25:disabled {opacity: 0.25 }@media (min-width: 640px) {.sm\:rounded-lg {border-radius: 0.5rem }.sm\:pt-0 {padding-top: 0px }}</style>
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
