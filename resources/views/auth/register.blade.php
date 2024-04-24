@extends('layouts.app')

@section('content')
<section class="p-9 == bg-[#eeece7]">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <form method="POST" action="{{ route('register') }}" class="bg-[#be9b75] bg-opacity-75 p-4 md:p-8 rounded-lg">
                    @csrf
                    <h3 class="text-2xl md:text-3xl text-white mb-6">{{ __('Register') }}</h3>
                    <div class="mb-4">
                        <label for="name" class="block text-white mb-2">{{ __('Name') }}</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="w-full px-3 py-2 rounded-md text-black focus:outline-none focus:bg-[#eeece7] @error('name') border-red-500 @enderror" 
                            value="{{ old('name') }}" 
                            required 
                            autocomplete="name"
                            placeholder="Name" 
                            autofocus
                        >
                        @error('name')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-white mb-2">{{ __('Email') }}</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Email"
                            class="w-full px-3 py-2 rounded-md text-black focus:outline-none focus:bg-[#eeece7] @error('email') border-red-500 @enderror" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email"
                        >
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-white mb-2">{{ __('Password') }}</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-3 py-2 rounded-md text-black focus:outline-none focus:bg-[#eeece7] @error('password') border-red-500 @enderror" 
                            required 
                            autocomplete="new-password"
                            placeholder="Password"
                        >
                        @error('password')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password-confirm" class="block text-white mb-2">{{ __('Confirm Password') }}</label>
                        <input 
                            type="password" 
                            id="password-confirm" 
                            name="password_confirmation" 
                            class="w-full px-3 py-2 rounded-md text-black focus:outline-none focus:bg-[#eeece7]" 
                            required 
                            autocomplete="new-password"
                            placeholder="Confirm Password"
                        >
                    </div>
                    <div class="flex justify-center">
                        <button 
                            type="submit" 
                            class="w-full px-4 py-2 bg-[#4b2b18] hover:bg-[#4b2b18cc] text-white rounded-md focus:outline-none"
                        >
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
