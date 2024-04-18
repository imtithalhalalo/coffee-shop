@extends('layouts.app')

@section('content')

<section class="ftco-section">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <form action="#" class="billing-form bg-gray-800 bg-opacity-75 p-4 md:p-8 rounded-lg" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 class="text-2xl md:text-3xl text-white mb-6">{{ __('Login') }}</h3>
                    <div class="mb-4">
                        <label for="email" class="block text-white mb-2">{{ __('Email') }}</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="w-full px-3 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:bg-gray-600 @error('email') is-invalid @enderror" 
                            placeholder="Email"
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email" 
                        >
                        @error('email')
                            <span class="block text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-white mb-2">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="w-full px-3 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:bg-gray-600 @error('password') is-invalid @enderror"
                            placeholder="Password"
                        >
                    </div>
                    <div class="flex justify-center">
                        <button 
                            type="submit" 
                            class="w-full px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                            Login
                        </button>
                        
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
