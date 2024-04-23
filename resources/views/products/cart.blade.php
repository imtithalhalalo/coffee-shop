@extends('layouts.app')

@section('content')

<section class="container mx-auto py-5">
    <div class="flex justify-center">
        <div class="w-full">
            @if($cartProducts->count() > 0)
                <table class="table-auto w-full">
                    <div class="px-4 py-2 mt-4 flex items-center justify-between bg-gray-100 border-b border-gray-200">
                        <div class="items-center">
                            <span>Delete</span>
                        </div>
                        <div class="items-center">
                            <span class="font-semibold text-gray-700">Product</span>
                        </div>
                        <div class="items-center">
                            <span class="font-semibold text-gray-700">Name</span>
                        </div>
                        <div class="items-center">
                            <span class="font-semibold text-gray-700">Quantity</span>
                        </div>
                        <div class="items-center">
                            <span class="font-semibold text-gray-700">Price</span>
                        </div>
                    </div>
                    @foreach($cartProducts as $cartProduct)
                        <div class="px-4 py-2 mt-4 flex items-center justify-between border-b border-gray-200">
                        <div class="items-center">
                            <a href="{{ route('cart.product.delete', $cartProduct->prod_id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </a>
                        </div>
                        <div class="items-center">
                            <div class="mb-5 md:mb-0 ftco-animate w-20 mx-auto">
                                <a href="{{ asset('assets/'.$cartProduct->image.'') }}" class="image-popup">
                                    <img src="{{ asset('assets/'.$cartProduct->image.'') }}" class="w-full" alt="Colorlib Template">
                                </a>
                            </div>
                        </div>
                        <div class="items-center">
                            <h3>{{ $cartProduct->name }}</h3>
                            <p>{{ $cartProduct->description }}</p>
                        </div>
                        <div class="items-center">
                            <div class="input-group mb-3">
                                <input disabled type="text" name="quantity" class="quantity form-input border border-gray-300 rounded-lg p-2 text-center" value="1" min="1" max="100">
                            </div>
                        </div>
                        <div class="items-center">
                            ${{ $cartProduct->price }}
                        </div>
                        </div>
                    @endforeach
                </table>
            @else
                <div class="flex flex-col items-center justify-center h-full">
                    <svg class="w-16 h-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m0 0l-4-4m4 4l4-4"></path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-600 mt-4">No items found</h3>
                    <p class="text-gray-500 mt-2">There are no items to display.</p>
                </div>
            @endif
        </div>
    </div>

    <div class="flex justify-end mt-5">
        <div class="w-full lg:w-1/3">
            <div class="cart-total mb-3">
                <h3 class="text-center">Cart Totals</h3>
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>${{ $totalPrice }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Delivery</span>
                    <span>$0.00</span>
                </div>
                <hr class="my-2">
                <div class="flex justify-between font-semibold">
                    <span>Total</span>
                    <span>${{ $totalPrice }}</span>
                </div>
            </div>
            @if($cartProducts->count() > 0)
                <form action="{{ route('prepare.checkout') }}" method="POST">
                    @csrf
                    <input type="hidden" name="price" value="{{ $totalPrice }}">
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn bg-[#be9b75] py-3 px-4">Proceed to Checkout</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</section>

@endsection
