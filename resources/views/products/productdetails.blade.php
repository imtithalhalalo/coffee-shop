@extends('layouts.app')

@section('content')



<section class="p-5">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 mb-5 md:mb-0 ftco-animate">
                <a href="{{ asset('assets/'.$product->image.'') }}" class="image-popup"><img src="{{ asset('assets/'.$product->image.'') }}" class="w-full" alt="Colorlib Template"></a>
            </div>
            <div class="w-full md:w-1/2 md:pl-5 ftco-animate">
            @if(Session::has('success'))
                <div class="p-4 bg-[#fff] border-l-4 border-[#be9b75] mb-1">
                    <p class="text-sm text-black">{{ Session::get('success') }}</p>
                </div>
            @endif
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
                    @if(isset(Auth::user()->id))
                        @if($checkingInCart === 0)
                            <button type="submit" name="submit" class="btn bg-[#be9b75] py-3 px-5 hover:bg-[#be9b75cc] text-white">
                                Add to Cart
                            </button>
                        @else
                            <button type="submit" name="submit" class="btn bg-[#be9b75] py-3 px-5" disabled>
                                Added to Cart
                            </button>
                        @endif
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

<section class="p-9 bg-white">
    <div class="container mx-auto">
        <div class="mb-5 pb-3 text-center ftco-animate">
            <span class="subheading">Discover</span>
            <h2 class="mb-4 text-xl md:text-3xl lg:text-4xl">Related products</h2>
            <p class="text-sm md:text-base">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
        <div class="flex flex-wrap justify-center">

        @foreach ($relatedProducts as $relatedProduct)
        <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0 m-1">
                <div class="menu-entry bg-white rounded-lg overflow-hidden shadow-md">
                    <a href="{{ route('product.details', $relatedProduct->id) }}" class="block"><img src="{{ asset('assets/'.$relatedProduct->image.'') }}" alt="Coffee Capuccino" class="w-full"></a>
                    <div class="text py-4 px-6">
                        <h3 class="text-lg md:text-xl mb-2"><a href="{{ route('product.details', $relatedProduct->id) }}" class="text-coffee-dark">{{ $relatedProduct->name }}</a></h3>
                        <p class="text-sm md:text-base mb-2">{{ $relatedProduct->description }}</p>
                        <p class="price text-md md:text-lg font-semibold mb-2"><span>${{ $relatedProduct->price }}</span></p>
                        <p><a href="{{ route('product.details', $relatedProduct->id) }}" class="btn bg-[#be9b75] hover:bg-[#be9b75cc] text-white">Show</a></p>
                    </div>
                </div>
            </div>

        @endforeach
        </div>
    </div>
</section>

@endsection