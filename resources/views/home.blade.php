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
@endsection
