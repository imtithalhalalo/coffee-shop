@extends('layouts.app')

@section('content')

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
