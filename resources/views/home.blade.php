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
</section>


@endsection
