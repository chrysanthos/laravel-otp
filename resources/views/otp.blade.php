<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <script>--}}
{{--        tailwind.config = {--}}
{{--            theme: {--}}
{{--                extend: {--}}
{{--                    colors: {--}}
{{--                        primary: {--}}
{{--                            200: '#b464ff',--}}
{{--                            400: '#8a4dc2',--}}
{{--                            700: '#843abd',--}}
{{--                        },--}}
{{--                    },--}}
{{--                },--}}
{{--            },--}}
{{--        };--}}
{{--    </script>--}}
    <style>
        *,::before,::after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,[type='button'],[type='reset'],[type='submit']{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type='search']{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role="button"]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*,::before,::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-scroll-snap-strictness:proximity;--tw-ring-offset-width:0;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000}::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-scroll-snap-strictness:proximity;--tw-ring-offset-width:0;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000}.mx-auto{margin-left:auto;margin-right:auto}.mb-1{margin-bottom:.25rem}.mb-4{margin-bottom:1rem}.mb-8{margin-bottom:2rem}.mt-3{margin-top:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.mt-8{margin-top:2rem}.flex{display:flex}.inline-flex{display:inline-flex}.h-14{height:3.5rem}.min-h-screen{min-height:100vh}.w-12{width:3rem}.w-full{width:100%}.max-w-\[260px\]{max-width:260px}.max-w-md{max-width:28rem}.list-inside{list-style-position:inside}.list-disc{list-style-type:disc}.appearance-none{appearance:none}.flex-col{flex-direction:column}.items-center{align-items:center}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-around{justify-content:space-around}.gap-3{gap:.75rem}.overflow-hidden{overflow:hidden}.whitespace-nowrap{white-space:nowrap}.rounded{border-radius:.25rem}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.border{border-width:1px}.border-transparent{border-color:transparent}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-primary-400{--tw-bg-opacity:1;background-color:rgb(138 77 194 / var(--tw-bg-opacity))}.bg-slate-100{--tw-bg-opacity:1;background-color:rgb(241 245 249 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.p-4{padding:1rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-3\.5{padding-left:.875rem;padding-right:.875rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.py-2\.5{padding-top:.625rem;padding-bottom:.625rem}.py-4{padding-top:1rem;padding-bottom:1rem}.pl-1{padding-left:.25rem}.pt-6{padding-top:1.5rem}.text-center{text-align:center}.font-sans{font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}.text-2xl{font-size:1.5rem;line-height:2rem}.text-\[15px\]{font-size:15px}.text-sm{font-size:.875rem;line-height:1.25rem}.text-xs{font-size:.75rem;line-height:1rem}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-semibold{font-weight:600}.tracking-widest{letter-spacing:.1em}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-green-600{--tw-text-opacity:1;color:rgb(22 163 74 / var(--tw-text-opacity))}.text-primary-400{--tw-text-opacity:1;color:rgb(138 77 194 / var(--tw-text-opacity))}.text-red-600{--tw-text-opacity:1;color:rgb(220 38 38 / var(--tw-text-opacity))}.text-slate-500{--tw-text-opacity:1;color:rgb(100 116 139 / var(--tw-text-opacity))}.text-slate-900{--tw-text-opacity:1;color:rgb(15 23 42 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-md{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1),0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color),0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow)}.shadow-gray-950\/10{--tw-shadow-color:rgb(3 7 18 / 0.1);--tw-shadow:var(--tw-shadow-colored)}.outline-none{outline:2px solid transparent;outline-offset:2px}.transition-colors{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke;transition-timing-function:cubic-bezier(0.4,0,0.2,1);transition-duration:150ms}.duration-150{transition-duration:150ms}.hover\:border-slate-200:hover{--tw-border-opacity:1;border-color:rgb(226 232 240 / var(--tw-border-opacity))}.hover\:bg-primary-700:hover{--tw-bg-opacity:1;background-color:rgb(132 58 189 / var(--tw-bg-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.hover\:shadow-gray-950\/40:hover{--tw-shadow-color:rgb(3 7 18 / 0.4);--tw-shadow:var(--tw-shadow-colored)}.focus\:border-gray-900:focus{--tw-border-opacity:1;border-color:rgb(17 24 39 / var(--tw-border-opacity))}.focus\:border-primary-200:focus{--tw-border-opacity:1;border-color:rgb(180 100 255 / var(--tw-border-opacity))}.focus\:bg-white:focus{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus\:ring-gray-300:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(209 213 219 / var(--tw-ring-opacity))}.focus\:ring-primary-200:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(180 100 255 / var(--tw-ring-opacity))}.focus-visible\:outline-none:focus-visible{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow,0 0 #0000)}.focus-visible\:ring-gray-300:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(209 213 219 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:w-14{width:3.5rem}.sm\:gap-3{gap:.75rem}.sm\:rounded-lg{border-radius:.5rem}.sm\:px-0{padding-left:0;padding-right:0}.sm\:px-8{padding-left:2rem;padding-right:2rem}.sm\:pt-0{padding-top:0}}
    </style>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div
        class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100 px-2 sm:px-0"
        style="padding-bottom: 200px"
    >
        @if($logoUrl = config('otp.logo'))
            <div>
                <a href="/">
                    <img src="{{ $logoUrl }}" alt="{{ config('app.name') }}" style="max-width: 300px;">
                </a>
            </div>
        @endif

        <div class="w-full max-w-md mt-6 px-3 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            @if (isset($errors) && $errors->any())
                <div class="mb-4">
                    <div class="font-medium text-center text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                    <ul class="mt-3 list-disc text-center list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 text-center">
                    {{ session('status') }}
                </div>
            @endif

            <div class="text-center px-2 sm:px-8 py-4">
                <header class="mb-8">
                    <h1 class="text-2xl font-bold mb-1">Mobile Phone Verification</h1>
                    <p class="text-[15px] text-slate-500">Enter the 6-digit verification code that was sent to your
                        phone number.</p>
                </header>
                <form id="otp-form" method="POST" action="{{ route('2fa.store') }}">
                    @csrf
                    <div class="flex items-center justify-center gap-3 sm:gap-3">
                        <input
                            type="text"
                            name="otp-code-1"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            autofocus
                            pattern="\d*" maxlength="1"/>
                        <input
                            type="text"
                            name="otp-code-2"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            maxlength="1"/>
                        <input
                            type="text"
                            name="otp-code-3"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            maxlength="1"/>
                        <input
                            type="text"
                            name="otp-code-4"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            maxlength="1"/>
                        <input
                            type="text"
                            name="otp-code-5"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            maxlength="1"/>
                        <input
                            type="text"
                            name="otp-code-6"
                            class="w-12 sm:w-14 h-14 text-center text-2xl font-extrabold text-slate-900 bg-slate-100 border border-transparent hover:border-slate-200 appearance-none rounded p-4 outline-none focus:bg-white focus:border-primary-200 focus:ring-2 focus:ring-primary-200"
                            maxlength="1"/>
                    </div>
                    <div class="max-w-[260px] mx-auto mt-8">
                        <button type="submit"
                                class="w-full inline-flex justify-center whitespace-nowrap rounded-lg bg-primary-400 hover:bg-primary-700 px-3.5 py-2.5 text-sm font-medium text-white shadow-sm shadow-gray-950/10 hover:shadow-gray-950/40 focus:outline-none focus:ring focus:ring-gray-300 focus-visible:outline-none focus-visible:ring focus-visible:ring-gray-300 transition-colors duration-150">
                            Verify Account
                        </button>
                    </div>
                </form>
                <div class="text-sm text-slate-500 mt-4 flex items-center justify-center">
                    Didn't receive code?
                    <form method="POST" action="{{ route('2fa.resend') }}" class="pl-1">
                        @csrf
                        <button
                            type="submit"
                            class="text-sm font-medium text-primary-400 hover:text-gray-700"
                        >
                            {{ __('Resend OTP') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="max-w-md w-full flex align-center justify-around">
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
        </div>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('otp-form')
            const inputs = [...form.querySelectorAll('input[type=text]')]
            const submit = form.querySelector('button[type=submit]')

            const handleKeyDown = (e) => {
                if (
                    !/^[0-9]{1}$/.test(e.key)
                    && e.key !== 'Backspace'
                    && e.key !== 'Delete'
                    && e.key !== 'Tab'
                    && !e.metaKey
                ) {
                    e.preventDefault()
                }

                if (e.key === 'Delete' || e.key === 'Backspace') {
                    const index = inputs.indexOf(e.target);
                    if (index > 0) {
                        inputs[index - 1].value = '';
                        inputs[index - 1].focus();
                    }
                }
            }

            const handleInput = (e) => {
                const {target} = e
                const index = inputs.indexOf(target)
                if (target.value) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus()
                    } else {
                        submit.focus()
                    }
                }
            }

            const handleFocus = (e) => {
                e.target.select()
            }

            const handlePaste = (e) => {
                e.preventDefault()
                const text = e.clipboardData.getData('text')
                if (!new RegExp(`^[0-9]{${inputs.length}}$`).test(text)) {
                    return
                }
                const digits = text.split('')
                inputs.forEach((input, index) => input.value = digits[index])
                submit.focus()
            }

            inputs.forEach((input) => {
                input.addEventListener('input', handleInput)
                input.addEventListener('keydown', handleKeyDown)
                input.addEventListener('focus', handleFocus)
                input.addEventListener('paste', handlePaste)
            })
        })
    </script>
</div>
</body>
</html>
