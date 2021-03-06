<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <h1 class="md:mb-0 font-bold uppercase text-2xl text-gray-700">Sign in to your account</h1>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
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

            <div class="flex items-center justify-end mt-4">

                <x-button class="login-button">
                    {{ __('Continue') }}
                </x-button>
            </div>
            <div class="mt-4">
                @if (Route::has('register'))
                    <span class="span-reg">Don't have an account? </span><a href="{{ route('register') }}" class="register">
                        Sign up
                    </a>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
