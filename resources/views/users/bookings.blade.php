@extends('layouts.app')

@section('content')

<div class="container p-4">
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-semibold leading-7 text-gray-900 fs-1">My Booking Tables</h3>
    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Please find your tables that you booked below.</p>
  </div>

  <div class="container p-4">
    @if($bookings->isEmpty())
    <div class="flex items-center justify-center mt-8">
        <img src="{{ asset('assets/empty-cart.png') }}" alt="Empty Cart" class="h-24 w-24">
      </div>
      <div class="px-4 py-2 mt-4 flex items-center justify-center text-gray-500">
        <span>You still have no bookings.</span>
      </div>
    @else
      <div class="px-4 py-2 mt-4 flex items-center justify-between bg-gray-100 border-b border-gray-200">
        <div class="items-center">
          <span class="font-semibold text-gray-700">Full Name</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Date</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Time</span>
        </div>
        <div class="items-center">
          <span class="font-semibold text-gray-700">Phone Number</span>
        </div>
      </div>
      @foreach($bookings as $booking)
        <div class="px-4 py-2 mt-4 flex items-center justify-between border-b border-gray-200">
          <div class="items-center">
            <span>{{ $booking->first_name }} {{ $booking->last_name }}</span>
          </div>
          <div class="items-center">
            <span>{{ $booking->date }}</span>
          </div>
          <div class="items-center">
            <span>{{ $booking->time }}</span>
          </div>
          <div class="items-center">
            <span>{{ $booking->phone }}</span>
          </div>
        </div>
      @endforeach
    @endif

  </div>
</div>

@endsection
