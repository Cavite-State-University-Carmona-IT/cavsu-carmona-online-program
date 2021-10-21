

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo" class="max-w-full">
            <img src="{{asset('images/cvsulogo.png')}}" alt="" class="h-32 w-32">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

      

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="block">
                
                <x-jet-label for="email" value="{{ __('Email') }}" />
                
                <x-jet-input id="email" class="w-full border-1 border-gray-200  bg-white h-10 px-5 pr-16 rounded-full text-sm hover:border-gray-300 focus:outline-none focus:border-gray-300 focus:ring-gray-300 focus:ring-opacity-50 focus:ring-1" style="margin-top: 5px;" type="email" placeholder="Enter your email address" name="email" :value="old('email')" required autofocus   />
                
                
            </div>
      

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="inline-flex items-center px-3 py-2 m-1 text-sm leading-4 font-medium rounded-sm text-white bg-gray-700 hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>

    </x-jet-authentication-card>
</x-guest-layout>
