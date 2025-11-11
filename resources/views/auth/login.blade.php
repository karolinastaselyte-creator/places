<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address --> 
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="items-center flex flex-col mt-4 space-y-2">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-[#6D8172] hover:text-gray-500 rounded-md" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-full justify-center py-[11px]">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-4 text-[#2D5246]">
            Dont have an acount? 
            <a class="underline text-sm text-[#6D8172] hover:text-gray-500 rounded-md" href="{{ route('register') }}">
                Click here to make an account
            </a>
        </div>
    </form>
</x-guest-layout>
