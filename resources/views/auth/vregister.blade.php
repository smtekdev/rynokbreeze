<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-center" style="position: absolute;margin-left: -5%; margin-top: -3%;">
                <img src="assets/images/logos/logo-6.png" alt="logo" style="max-width: 25% !important;margin-left: -1%;">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- Vendor Registration Form -->
        <form method="POST" action="{{ route('vregister') }}" style="padding: 30% 0%;margin-top: -29%;">
            @csrf

            <!-- Business Name -->
            <div>
                <x-label for="bussinesname" :value="__('Business Name')" />
                <x-input id="bussinesname" class="block mt-1 w-full" type="text" name="bussinesname" :value="old('bussinesname')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Phone -->
            <div>
                <x-label for="phone" :value="__('Phone')" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <!-- Business Address -->
            <div class="mt-4">
                <x-label for="bussinessaddress" :value="__('Business Address')" />
                <x-input id="bussinessaddress" class="block mt-1 w-full" type="text" name="bussinessaddress" :value="old('bussinessaddress')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}" style="position:absolute; margin-top: 8%;margin-right: 10%;">
                    {{ __('Already registered?') }}
                </a>
                <x-button class="ml-4" style="background-color: #b43434; position: absolute;  margin-left: 13%;margin-top: 3%;margin-right: 11%;">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="flex items-center center mt-4">
                <a href="{{ route('register') }}" style="position: absolute; margin-left: 11.2%;margin-top: 9%;font-size:1.1rem;color:#0D7AD1;">
                    Register As User
                </a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>