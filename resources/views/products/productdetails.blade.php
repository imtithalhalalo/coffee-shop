@extends('layouts.app')

@section('content')

<section class="ftco-section">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 mb-5 md:mb-0 ftco-animate">
                <a href="{{ asset('assets/'.$product->image.'') }}" class="image-popup"><img src="{{ asset('assets/'.$product->image.'') }}" class="w-full" alt="Colorlib Template"></a>
            </div>
            <div class="w-full md:w-1/2 md:pl-5 ftco-animate">
                <h3 class="text-xl md:text-3xl mb-2">{{ $product->name }}</h3>
                <p class="price text-lg md:text-xl mb-4"><span>${{ $product->price }}</span></p>
                <p class="text-sm md:text-base mb-4">{{ $product->description }}</p>
                <p class="text-sm md:text-base mb-4">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                <div class="flex items-center mb-4">
                </div>
                <form action="{{ route('add.cart', $product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="prod_id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">

                    @if($checkingInCart === 0)
                        <button type="submit" name="submit" class="btn btn-warning py-3 px-5">
                            Add to Cart
                        </button>
                    @else
                        <button type="submit" name="submit" class="btn btn-warning py-3 px-5" disabled>
                            Added to Cart
                        </button>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

@endsection