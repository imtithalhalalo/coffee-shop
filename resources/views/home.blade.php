@extends('layouts.app')

@section('content')
<div class="bg-cover relative mt-0 p-5" style="background-image: url({{ asset('assets/bg_1.jpeg') }});">
    <div class="container mx-auto px-4">
        <div class="flex flex-col justify-center items-center h-full">
            <span class="subheading text-white text-lg md:text-xl lg:text-2xl font-bold uppercase mb-2">Welcome</span>
            <h1 class="text-white text-center text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">The Best Coffee Testing Experience</h1>
            <p class="text-white text-center mb-8 md:mb-10 max-w-lg">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0">
                <a 
                    href="{{ route('products.menu') }}" 
                    class="btn bg-white hover:bg-gray-200 px-8 py-3 text-gray-800 font-semibold ml-4 border border-gray-300 rounded shadow">
                    View Menu
                </a>
                <a 
                    href="{{ route('products.menu') }}" 
                    class="btn bg-[#be9b75] hover:bg-gray-200 px-8 py-3 text-gray-800 font-semibold ml-4 border rounded shadow">
                    Order Now
                </a>
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
                    <p><a href="#" class="btn bg-[#be9b75] px-4 py-3">View Full Menu</a></p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('assets/coffee.jpeg') }}" alt="Image Description" class="w-50 h-auto">
            </div>
        </div>
    </div>



    <div class="container">
        <div class="flex flex-wrap justify-between items-center">
            <div class="w-full md:w-1/2 pr-0 md:pr-5">
                <div class="bg-white py-24 sm:py-32">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="flex max-w-xl flex-col items-start justify-between">
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Every Monday, our coffee shop unveils a mystery brew, a unique concoction crafted by our expert baristas. Customers eagerly anticipate the weekly surprise, never knowing what delightful flavor combination awaits them. From exotic spices to seasonal fruits, each Mystery Brew Monday is a thrilling adventure for the taste buds.</p>
                            
                            <div class="mt-8 flex items-center gap-x-4">
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        Open Monday-Friday
                                    </p>
                                    <p class="text-gray-600">8:00am - 9:00pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center">
                <div class="book p-4">
                    @if(Session::has('success'))
                        <div class="p-4 bg-yellow-100 border-l-4 border-yellow-200">
                            <p class="text-sm text-yellow-500">{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    @if(Session::has('date'))
                        <div class="p-4 bg-red-100 border-l-4 border-red-200">
                            <p class="text-sm text-red-500">{{ Session::get('date') }}</p>
                        </div>
                    @endif
                    <h3 class="m-2 fs-2">Book a Table</h3>
                    <form action="{{ route('booking.tables') }}" method="POST" class="appointment-form">
                        @csrf
                        <div class="d-md-flex">
                            <div class="form-group m-2">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                                @if($errors->has('first_name'))
                                    <span class="block text-red-500 text-sm mt-1">{{ $errors->first('first_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group ml-md-4 m-2">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                @if($errors->has('last_name'))
                                    <span class="block text-red-500 text-sm mt-1">{{ $errors->first('last_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group m-2">
                                <input type="date" name="date" class="form-control appointment_date" placeholder="Date">
                                @if($errors->has('date'))
                                    <span class="block text-red-500 text-sm mt-1">{{ $errors->first('date') }}</span>
                                @endif
                            </div>
                            <div class="form-group ml-md-4 m-2">
                                <div class="input-wrap">
                                    <input type="time" name="time" class="form-control appointment_time" placeholder="Time">
                                    @if($errors->has('time'))
                                        <span class="block text-red-500 text-sm mt-1">{{ $errors->first('time') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group ml-md-4 m-2">
                                <input type="phone" name="phone" class="form-control" placeholder="Phone">
                                @if($errors->has('phone'))
                                    <span class="block text-red-500 text-sm mt-1">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <input type="hidden" class="form-control" name="user_id" value="{{ Auth::id() }}" placeholder="">
                        </div>
                        <div class="d-md-flex m-2">
                            <div class="form-group">
                                <textarea name="message" id="" cols="30" rows="2" name="message" class="form-control" placeholder="Message"></textarea>
                                @if($errors->has('message'))
                                    <span class="block text-red-500 text-sm mt-1">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="form-group ml-md-4">
                                <button type="submit" name="submit" value="Book" class="btn bg-[#be9b75] py-3 px-4 ml-2">Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
                    </svg>
                </span>
                <h3 class="text-lg font-semibold mb-2">Easy to Order</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/delivery-truck.png') }}" class="w-12 h-12">
                </span>
                <h3 class="text-lg font-semibold mb-2">Fastest Delivery</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center px-4">
                <span class="w-20 h-20 bg-gray-200 rounded-full flex items-center justify-center mb-5">
                    <img src="{{ asset('assets/coffee-cup.png') }}" class="w-10 h-10 ml-2">
                </span>
                <h3 class="text-lg font-semibold mb-2">Quality Coffee</h3>
                <p class="text-gray-600">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
        </div>
    </div>
</section>

<div class="container mx-auto">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="text-center mb-12">
            <span class="text-coffee-light subheading">Discover</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-coffee-dark mb-4">Best Coffee Sellers</h2>
            <p class="text-coffee-dark">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
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

                <a href="{{ route('product.details', $product->id) }}" class="btn bg-[#be9b75]">Show</a>
            </div>
        @endforeach
        </div> 
    </div>
</div>

</section>


@endsection
