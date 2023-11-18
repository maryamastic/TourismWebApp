@extends('frontend.layouts.main')
@section('main-container')
<!--- hero section for other-pages -->
<div class="container-fluid bg-primary py-5 mb-5" id="hero-header-tour">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Tours</h1>
                        
                        <p class="fs-4 text-white mb-4 animated slideInDown"> Explore Pakistan's Rich Culture and Scenic Wonders – Unforgettable Tours with TAK</p>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php
        
            $touringPackages = DB::table('tourpackages')->where('PackageType', 'tours')->paginate(10);
        ?>

       
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Discover Pakistan's Hidden Treasures with Unforgettable Tours</h1>
            </div>
           <!-- Services Start -->
            <div class="row g-4 justify-content-center">
            @foreach($touringPackages as $package)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('uploads/' .$package->PackageImage) }}" alt="{{ $package->PackageName }}">
                   </div>
                   <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $package->Deadline }}</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-hourglass-half text-primary me-2"></i>{{ $package->Duration }} days</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-dollar-sign text-primary me-2"></i>{{ $package->PackagePrice }} </small>
                        </div>
                        
            <div class="package">
                
                <!-- Add other package details here -->
            </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">{{ $package->PackageName }}</h3>
                           
                            <p>{{ $package->PackageName }}</p>
                            <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('package.show', ['PackageType' => $package->PackageType, 'slug' => $package->slug]) }}"   class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>

                               
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>

                            
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
                   <!-- Pagination links -->
        <!-- Custom pagination links with only "Previous" and "Next" -->
        <div class="pagination" id="parent-container">
            @if($touringPackages->previousPageUrl())
                <a href="{{ $touringPackages->previousPageUrl() }}">Previous</a>
            @endif
            @if($touringPackages->nextPageUrl())
                <a href="{{ $touringPackages->nextPageUrl() }}">Next</a>
            @endif
        </div>
                
            </div>
        </div>
    </div>

</div>
    <!-- Services End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">Book A Tour</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-transparent" id="select1">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Start -->


    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Here is a guide on</h6>
                <h1 class="mb-5">Our process</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-3 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Explore Destinations</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Browse through a wide array of breathtaking destinations in pakistan, from mountains to historic landmarks.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-check fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Select</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">With a wide range of options and experiences to choose from ,pick-up the trip that best suits your requirements
</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-phone fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Tell Us</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Contact us to book your desired package on a specific date, tell us all of your requirements.
</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-mountain fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Go & Explore Now</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">
                        All you need is to pack your bags and reach the departure location and just ENJOY your trip and make memories</p>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    <!-- Process Start -->

    @endsection
