@extends('layouts.app')

@section('content')

<section class="bg-slate-900">
    <div class="container mx-auto p-8">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('process.checkout') }}" method="POST" class="p-3 p-md-5 bg-slate-100 rounded-md">

                    <h3 class="mb-4 fs-1">Billing Details</h3>
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label for="firstname">Firt Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group mt-2">
                            <label for="lastname">Last Name</label>
                            <input type="text" name="last_name" class="form-control" placeholder="">
                        </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="form-group mt-2">
                                <label for="country">State / Country</label>
                                <select name="state" id="" class="form-control">
                                    <option value="France">France</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Canada">Canada</option>
                                    <option value="South Korea">South Korea</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="US">US</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group mt-2">
                                <label for="streetaddress">Street Address</label>
                                <textarea type="text" name="address" cols="10" rows="5" class="form-control" placeholder="House number and street name"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="towncity">Town / City</label>
                                <input type="text" name="city" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <label for="postcodezip">Postcode / ZIP *</label>
                                <input type="text" name="zip_code" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-4">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                            </div>
                        </div>

                        <input type="hidden" class="form-control" name="price" value="{{ Session::get('price') }}" placeholder="">
                        <input type="hidden" class="form-control" name="user_id" value="{{ Auth::id() }}" placeholder="">
                        <div class="col-md-12">
                            <div class="form-group mt-4">
                                <button type="submit" name="submit" class="btn bg-[#be9b75] py-3 px-4">
                                    Place an order
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</section>

@endsection