<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-center" style="position: absolute;margin-left: -5%; margin-top: -3%;">
            <img src="assets/images/logos/logo-6.png" alt="logo" style="max-width: 25% !important;margin-top: 13%;margin-left: -1%;">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h1 style="font-size:2rem; text-align:center; margin-top: 23%;">Login</h1><br>
        <p>Don't have an account? <a href="{{ route('register') }}">Create here</a></p><br>

        <form method="POST" action="{{ route('login') }}" style="padding: 30% 0%;margin-top: -29%;">
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
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="position:absolute; margin-top: 8%;margin-left: 11%;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3" style="background-color: #b43434; position: absolute;  margin-left: 13%;margin-top: 3%;">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="flex items-center center mt-4">
                <a href="{{ route('login.google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 7em;position: absolute;margin-top: 5%;">
                </a>
            </div>


        </form>
    </x-auth-card>
</x-guest-layout>
