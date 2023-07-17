<style>
    .adjst{        
    margin-top: 29.5%;
    position: absolute;
    margin-left: 6%;
    }
</style>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-center">
            <img src="assets/images/logos/logo-6.png" alt="logo" class="LoginLogo">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 adjst" :errors="$errors" />

        <h1 class="LoginH1">Login</h1><br>
        <p>Don't have an account? <a href="{{ route('register') }}">Create here</a></p><br>

        <form method="POST" action="{{ route('login') }}" class="LoginFormAdjust">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            

            <div class="flex items-center center mt-10">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 AdjustForgetPassword" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3 LoginAdjustIpad">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="flex items-center center mt-4">
                <a href="{{ route('login.google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" class="LoginGoogleImageAdjust">
                </a>
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>
