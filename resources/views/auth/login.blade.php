@extends('layouts.app')

@section('content')

<section class="ftco-section">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <form method="POST" action="{{ route('login') }}"  class="billing-form bg-gray-800 bg-opacity-75 p-4 md:p-8 rounded-lg" method="POST" action="{{ route('login') }}">
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
                    <div class="flex justify-content-end ">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button 
                            type="submit" 
                            class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 w-25">
                            Log In
                        </button>
                    </div>

                    <div class="mb-4 mt-2 text-white text-center">
                    <div class="border-b border-black w-full my-2"></div>

                        <span class="inline-block mx-2">Or</span>
                    </div>
                    <div class="text-center mb-6">
                        <a href="{{ route('google-auth') }}">
                            <div class="w-2/3 mx-auto px-4 py-2 bg-[#1f2937] text-white rounded-md hover:bg-[#1f2937cc] focus:outline-none focus:bg-[#1f2937cc]">
                                <div class="flex flex-row justify-between align-items-center ">
                                    <div>
                                    <svg fill='#fff' xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 32 32">
                                        <path d="M 16.003906 14.0625 L 16.003906 18.265625 L 21.992188 18.265625 C 21.210938 20.8125 19.082031 22.636719 16.003906 22.636719 C 12.339844 22.636719 9.367188 19.664063 9.367188 16 C 9.367188 12.335938 12.335938 9.363281 16.003906 9.363281 C 17.652344 9.363281 19.15625 9.96875 20.316406 10.964844 L 23.410156 7.867188 C 21.457031 6.085938 18.855469 5 16.003906 5 C 9.925781 5 5 9.925781 5 16 C 5 22.074219 9.925781 27 16.003906 27 C 25.238281 27 27.277344 18.363281 26.371094 14.078125 Z"></path>
                                    </svg>
                                    </div>
                                    <div>Continue with Google</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
