<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!--<x-jet-authentication-card-logo />-->   
            <img src="{{ asset('storage/image/cvsu-ext-application-logo.png') }}" width="110px"/>
        </x-slot>
        
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                
                <label for="email" value="{{ __('Email') }}" class="text-gray-500 text-left font-bold">Email </label>
                <input id="email" type="email" name="email" :value="old('email')" required autofocus class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}" class="text-gray-500 text-left font-bold">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-100 focus:ring-4 focus:ring-offset-1 focus:border-gray-300 sm:text-sm" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="ml-4 px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-gray-500 hover:bg-gray-600 active:bg-gray-700 focus:ring-gray-300">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
