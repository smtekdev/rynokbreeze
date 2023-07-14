<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="text-center" style="position: absolute;margin-left: -5%; margin-top: -3%;">
            <img src="assets/images/logos/logo-6.png" alt="logo" style="max-width: 25% !important;margin-left: -1%;">
            </a>
        </x-slot>


        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" style="padding: 30% 0%;margin-top: -29%;">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
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

            <!-- Address -->
            <div class="mt-4">
                <x-label for="address" :value="__('Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <!-- Referral Code -->
            <div class="mt-4">
                <x-label for="referral_code" :value="__('Referral Code')" />
            
                <x-input id="referral_code" class="block mt-1 w-full" type="text" name="referral_code" :value="old('referral_code')"  />
            </div> 

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}"  style="position:absolute; margin-top: 8%;margin-right: 10%;">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4" style="background-color: #b43434; position: absolute;  margin-left: 13%;margin-top: 3%;margin-right: 11%;">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="flex items-center center mt-4">
                <a href="{{ route('vregister') }}" style="position: absolute; margin-left: 10.2%;margin-top: 9%;font-size:1.1rem;color:#0D7AD1;">
                    Register As Vendor
                </a>
            </div>

            <div class="flex items-center center mt-4">
                <a href="">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 7em;position: absolute;margin-top: 5%;">
                </a>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
