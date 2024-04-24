@extends('layouts.app')

@section('content')
<section class="container mx-auto p-8">
        <div class="container mt-5">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span class='fw-bolder' >Address:</span> San Francisco, California, USA</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span class='fw-bolder'>Phone:</span> <a href="tel://1234567920">+2 263 4743 644</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span class='fw-bolder'>Email:</span> <a href="mailto:info@yoursite.com">info@coffeeshop.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span class='fw-bolder'>Website:</span> <a href="#">coffee-shop.com</a></p>
                        </div>
                    </div>
                </div>
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <form action="#" class="contact-form">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group  mb-2">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn bg-[#be9b75] hover:bg-[#be9b75cc] py-3 px-4 text-white">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </section>
@endsection