@extends('layouts.app')

@section('content')

<section class="py-16 container">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">About Our Coffee Shop</h2>
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mr-8">
                <p class="text-gray-700 leading-relaxed">
                    Welcome to Brew Haven, your cozy corner for coffee enthusiasts and connoisseurs alike. 
                    At Brew Haven, we believe in the power of a perfectly crafted cup of coffee to transform your day. 
                    Our journey began with a passion for quality coffee and a dream to create a space where community 
                    and caffeine collide.
                </p>
                <p class="text-gray-700 leading-relaxed mt-4">
                    Nestled in the heart of downtown, Brew Haven offers a warm and inviting atmosphere where you 
                    can relax, recharge, and savor the rich flavors of our hand-selected beans. 
                    From the moment you step through our doors, you'll be greeted by the aroma of freshly brewed 
                    coffee and the sound of friendly conversation.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('assets/cups.jpeg') }}" alt="Coffee shop interior" class="rounded-lg shadow-lg">
            </div>
        </div>
        <p class="text-gray-700 leading-relaxed mt-8">
            Whether you're a latte lover, an espresso aficionado, or simply in need of a pick-me-up, 
            Brew Haven has something to satisfy every palate. Our menu features a curated selection of 
            specialty drinks, seasonal favorites, and delicious pastries made with love by local bakers.
        </p>
        <p class="text-gray-700 leading-relaxed mt-4">
            At Brew Haven, we're more than just a coffee shop; we're a community. 
            We're committed to supporting local farmers, artists, and entrepreneurs, 
            and we strive to create a space where everyone feels welcome and valued. 
            So come on in, grab your favorite brew, and join us in celebrating the simple pleasures of life, 
            one cup at a time.
        </p>
    </div>
</section>

@endsection