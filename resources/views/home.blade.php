@extends('layouts.app')

@section('content')
<div class="bg-cover relative mt-0 p-5" style="background-image: url({{ asset('assets/bg_1.jpg') }});">
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-center items-center h-full">
            <span class="subheading text-white text-lg md:text-xl lg:text-2xl font-bold uppercase mb-2">Welcome</span>
            <h1 class="text-white text-center text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">The Best Coffee Testing Experience</h1>
            <p class="text-white text-center mb-8 md:mb-10 max-w-lg">Coffee, with its rich aroma and bold flavor, is often regarded as the perfect companion for both the early riser's morning ritual and the late-night study session alike.
                <a href="#" class="btn btn-warning px-8 py-3 md:px-10 md:py-4 text-center text-white hover:bg-blue-700 transition duration-300 ease-in-out">Order Now</a>
                <a href="#" class="btn btn-white btn-outline-white px-8 py-3 md:px-10 md:py-4 text-center hover:bg-white hover:text-black transition duration-300 ease-in-out">View Menu</a>
            </div>
        </div>
    </div>
</div>
<section class="p-5">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full md:w-1/2 pr-0 md:pr-5">
                <div class="heading-section text-right ftco-animate">
                    <span class="subheading text-gray-700">Discover</span>
                    <h2 class="mb-4 text-2xl md:text-4xl">Our Menu</h2>
                    <p class="mb-4 text-gray-700">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-warning px-4 py-3">View Full Menu</a></p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('assets/coffee.jpeg') }}" alt="Image Description" class="w-50 h-auto">
            </div>
        </div>
    </div>




<section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                </span>
                <h3 class="text-lg font-semibold mb-2">Easy to Order</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/delivery-truck.png') }}" class="w-12 h-12">
                </span>
                <h3 class="text-lg font-semibold mb-2">Fastest Delivery</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/coffee-cup.png') }}" class="w-10 h-10 ml-2">
                </span>
                <h3 class="text-lg font-semibold mb-2">Quality Coffee</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
    </div>
</section>




</section>


@endsection
