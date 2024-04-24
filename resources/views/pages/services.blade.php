@extends('layouts.app')

@section('content')

<section class="py-16 pt-20 pb-40">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                </span>
                <h3 class="text-lg font-semibold mb-2">Easy to Order</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/delivery-truck.png') }}" class="w-12 h-12">
                </span>
                <h3 class="text-lg font-semibold mb-2">Fastest Delivery</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-white rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/coffee-beans.png') }}" class="w-10 h-10">
                </span>
                <h3 class="text-lg font-semibold mb-2">Quality Coffee</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
    </div>
</section>

@endsection


