@extends('frontend.layouts.main')
@section('main-container')

<!--- hero section for other-pages -->
<div class="container-fluid bg-primary py-5 mb-5" id="hero-header-rockclimbing">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Testimonials</h1>
                        
                        <p class="fs-4 text-white mb-4 animated slideInDown">What our client has to say</p>
                       
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{url('frontend/img/testimonial-1.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Raheel Ali </h5>
                    
                    <p class="mb-0">I've traveled to many places around the world, but Pakistan has been an absolute revelation. The people are warm and welcoming, the landscapes are stunning, and the culture is rich. I'll forever cherish the memories of exploring the Himalayan peaks</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{url('frontend/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Abdul Saleh</h5>
                   
                    <p class="mt-2 mb-0">As a travel enthusiast, Pakistan was a hidden gem waiting to be discovered. The diversity of landscapes, lush greenery of Fairy Meadows, is astonishing. Don't miss out on the culinary delights and the colorful bazaars</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{url('frontend/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Suleman Faisal</h5>
                  
                    <p class="mt-2 mb-0">Pakistan is a photographer's paradise. The vibrant bazaars, stunning mosques, and the serene lakes of Skardu provided endless opportunities for capturing breathtaking moments. It's a country that leaves an indelible mark on your heart</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="{{url('frontend/img/testimonial-4.jpg')}}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Zahid</h5>
                    
                    <p class="mt-2 mb-0">Trekking in Pakistan was an adventure of a lifetime. K2 Base Camp was a highlight, and the local guides made it a safe and memorable journey. Pakistan's untamed beauty will draw you in, and its people will make you want to return</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        
    @endsection
