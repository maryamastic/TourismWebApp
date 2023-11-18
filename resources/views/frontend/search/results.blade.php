@extends('frontend.layouts.main')
@section('main-container')
<!--- hero section for other-pages -->
<div class="container-fluid bg-primary py-5 mb-5" id="hero-header-search">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Search Results</h1>
                        
                        <p class="fs-4 text-white mb-4 animated slideInDown"></p>
                       
                    </div>
                </div>
            </div>
        </div>


    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Desired search results</h1>

            </div>
           <!-- Services Start -->
           <div class="row g-4 justify-content-center">
           @if(empty($packages))
            
            <div class="col-sm-12">
        <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
									<span aria-hidden="true">
									</span>
							
          <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
          <strong class="font__weight-semibold">Sorry!</strong> No packages found.You can search any other category
        </div>
      </div>

        @else
           @foreach($packages as $package)
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

                               
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>

                            
                            
                                </div>
                        </div>
                    </div>
                </div>
                 
                
                @endforeach
            
                @endif


            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
           
        
                </div></div>
                </div>
            @endsection