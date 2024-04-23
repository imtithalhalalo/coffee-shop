@extends('layouts.app')

@section('content')


<div class="bg-white">

    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="px-4 mt-4 sm:px-0">
            <h3 class="text-base font-semibold leading-7 text-gray-900 fs-1">Our Menu</h3>
            <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Please find our menu below.</p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:gap-x-8" id="v-pills-2">
            @foreach($products as $product)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="{{ asset('assets/'.$product->image.'') }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                    <a href="{{ route('product.details', $product->id) }}">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        {{ $product->name }}
                    </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                </div>
                <p class="text-sm font-medium text-gray-900">${{ $product->price }}</p>
                </div>

                <a href="{{ route('product.details', $product->id) }}" class="btn bg-[#be9b75] mt-2">Show</a>
            </div>
        @endforeach
    </div>

    
  </div>
</div>


<section>
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <h3 class="mt-5 fs-2">Desserts</h3>
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach($desserts as $dessert)
                        <li class="flex justify-between gap-x-6 py-5">
                            <img class="h-10 w-12 flex-none rounded bg-gray-50" src="{{ asset('assets/'.$dessert->image.'') }}" alt="">
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $dessert->name }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $dessert->description }}</p>
                                </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">${{ $dessert->price }}</p>
                            </div>
                        </li>
                    @endforeach
                    
                </ul>
            </div>

            <div class="col-md-6">
                <h3 class="mt-5 fs-2">Drinks</h3>
                <ul role="list" class="divide-y divide-gray-100">
                    @foreach($drinks as $drink)
                        <li class="flex justify-between gap-x-6 py-5">
                            <img class="h-10 w-12 flex-none rounded bg-gray-50" src="{{ asset('assets/'.$drink->image.'') }}" alt="{{ $drink->name }}">
                            <div class="flex min-w-0 gap-x-4">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $drink->name }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $drink->description }}</p>
                                </div>
                            </div>
                            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">${{ $drink->price }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
