<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-center RegisterLogoSet">
                <img src="assets/images/logos/logo-6.png" alt="logo" class="RegisterLogoWidth" style="max-width: 25%;margin-left: -1%;">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <!-- Vendor Registration Form -->
        <form method="POST" action="{{ route('vregister') }}" class="RegisterFormSet">
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
                <a class="underline text-sm text-gray-600 hover:text-gray-900 AlreadyRegister" href="{{ route('login') }}" >
                    {{ __('Already registered?') }}
                </a>
                <x-button class="ml-4 RegisterBtn" >
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="flex items-center center mt-4">
                <a href="{{ route('register') }}" class="RegisterAsUser">
                    Register As User
                </a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>