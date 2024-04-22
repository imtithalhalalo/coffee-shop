<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
</head>
<body>
    <div id="app">
        <nav class="bg-gray-800">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="#" class="flex-shrink-0 flex items-center text-white">
                            <img class="h-8 w-auto" src="{{ asset('assets/cup.png') }}" alt="CoffeeShop">
                            <span class="ml-2 text-sm font-semibold">Coffee<small>Shop</small></span>
                        </a>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="flex space-x-4">
                            <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                            <a href="{{ route('products.menu') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Menu</a>
                            <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
                            <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                        </div>
                        <a href="{{ route('cart') }}" class="ml-4 mr-8 flex-shrink-0 flex items-center text-gray-300 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </a>
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="ml-4 text-sm font-medium text-gray-300 hover:text-white">Login</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm font-medium text-gray-300 hover:text-white">Register</a>
                            @endif
                        @else
                        <li class="relative inline-block text-left">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users.orders') }}">
                                    {{ __('My Orders') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('users.bookings') }}">
                                    {{ __('My Bookings') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </div>
                    <div class="sm:hidden flex items-center">
                        <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-expanded="false" @click="isOpen = !isOpen">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navbar -->
            <div class="sm:hidden" x-show="isOpen" @click.away="isOpen = false">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="{{ route('products.menu') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Menu</a>
                    <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Services</a>
                    <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">About</a>
                    <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                    @guest
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="ml-4 text-sm font-medium text-gray-300 hover:text-white">Login</a>
                        @endif

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm font-medium text-gray-300 hover:text-white">Register</a>
                        @endif
                    @else
                    <li class="relative inline-block text-left">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.orders') }}">
                                {{ __('My Orders') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('users.bookings') }}">
                                {{ __('My Bookings') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </div>
            </div>
        </nav>
        <main class=''>
            @yield('content')
        </main>
        <footer class="bg-gray-800 text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 p-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="mb-5">
                        <h2 class="text-lg font-semibold mb-4">About Us</h2>
                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="flex space-x-4">
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="mb-5">
                        <h2 class="text-lg font-semibold mb-4">Have a Questions?</h2>
                        <div class="block">
                            <ul class="list-none">
                                <li><span class="icon icon-map-marker"></span><span class="text">San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 263 4743 644</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@coffeeshop.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
