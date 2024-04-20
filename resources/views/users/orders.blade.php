@extends('layouts.app')

@section('content')

<div class="container p-4">
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-semibold leading-7 text-gray-900 fs-1">My Orders</h3>
    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Please find your orders below.</p>
  </div>

  <div class="container p-4">


    @if($orders->isEmpty())
    <div class="flex items-center justify-center mt-8">
        <img src="{{ asset('assets/empty-cart.png') }}" alt="Empty Cart" class="h-24 w-24">
      </div>
      <div class="px-4 py-2 mt-4 flex items-center justify-center text-gray-500">
        <span>You still have no orders.</span>
      </div>
    @else
      <div class="px-4 py-2 mt-4 flex items-center justify-between bg-gray-100 border-b border-gray-200">
        <div class="items-center">
          <span class="font-semibold text-gray-700">Full Name</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Email</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Address</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">City</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Price</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Status</span>
        </div>
      </div>
      @foreach($orders as $order)
        <div class="px-4 py-2 mt-4 flex items-center justify-between border-b border-gray-200">
          <div class="items-center">
            <span>{{ $order->first_name }}</span>
          </div>
          <div class="items-center">
            <span>{{ $order->email }}</span>
          </div>
          <div class="items-center">
            <span>{{ $order->address }}</span>
          </div>
          <div class="items-center">
            <span>{{ $order->city }}</span>
          </div>
          <div class="items-center">
            <span>{{ $order->price }}</span>
          </div>
          <div class="items-center">
            <span>{{ $order->status }}</span>
          </div>
        </div>
      @endforeach
    @endif

  </div>
</div>

@endsection
