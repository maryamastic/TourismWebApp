@extends('frontend.layouts.main')
@section('main-container')
 <!-- Carousel Start -->
 <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{url('frontend/img/home-page-slider-hero-skardu.jpg')}}" alt="Image" style="filter: brightness(50%);">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" >
                        <div class="p-3" style="max-width:900px;padding:4rem;">
                            <h4 class="text-white text-uppercase mb-md-3">Hello Travelers</h4>
                            <h1 class="display-3 text-white mb-md-6">Where Adventure Meets Tradition in Every Step</h1>
                            <a href="/contact" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{url('frontend/img/home-page-slider-hero-K-2.jpg')}}" alt="Image" style="filter: brightness(50%);">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Journey through Pakistan</h4>
                            <h1 class="display-3 text-white mb-md-4">A Tapestry of Scenic Wonders</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Booking Start -->
    <div class="container-fluid ">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;margin-top:20px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                <h4 >Find out your desired Tour </h4>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                <form action="{{ route('search.results') }}" method="POST">
                                    @csrf
                                <select class="custom-select px-4"  style="height: 47px;width:100%;" name="package_price">
                                        <option selected>Tour Category</option>
                                        <option value="custom">Custom-Package</option>
                                        <option value="taylormade">Tailored-made</option>
                                        <option value="all">All Packages</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;width:100%;" name="package_type">
                                        <option selected>Package Type</option>
                                        <option value="Mountaineering">Mountaineering</option>
                                        <option value="RockClimbing">RockClimbing</option>
                                        <option value="Trekking">Trekking</option>
                                        <option value="Tours">Tour</option>
                                        <option value="SpecialInterest">Special Interest</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" style="height: 47px;width:100%; margin-top: -20px;" id="btn_search" name="search">Search</button>
                    </div></form>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
<!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{url('frontend/img/home-page-travel-amazing-karakoram-Tourism.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">TakPakTour</span></h1>
                    <p class="mb-4">TakPakTour, a renowned travel company, has been dedicated to welcoming international adventurers and tourists to Pakistan since 2007. Our mission revolves around promoting social development and environmental conservation, with a strong focus on tourism. We take great pride in leading adventurers and tourists to complete satisfaction, catering to all their needs and preferences. Our doors are always open to tourists, and we offer top-notch services while maintaining high standards for tours and travel to their chosen destinations.

</p>
                    <p class="mb-4">We introduce innovative and modern forms of tourism to our valued guests, providing them with access to our services and facilities in a warm and inviting atmosphere. Throughout their journey with us, they will feel comfortable making any requests, knowing that we are here to meet their every need. We strive to create memorable experiences that will leave our guests eager to return for future tours with TakPakTour.




</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cost Savings</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Diverse Tour Packages</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Customization Options</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Detailed Itineraries</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Local Expert Guides</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Travel Resources</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="/about">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Your Benefits, Our Expertise</h6>
                <h1 class="mb-5">Features</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Customized Travel</h5>
                            <p>Travel Amazing Karakoram tailors tours and travels to specific areas based on the preferences and opinions of tourists</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>High Standards</h5>
                            <p>The company maintains high standards in tour and travel services, ensuring customer satisfaction in all aspects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>"Our team of experienced travel guides, intimately familiar with the region's hidden treasures, and filled with expert insights</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5> Customer Focus </h5>
                            <p>Our aim is to provide such a satisfying experience that tourists will not hesitate to return for future tours, building long-term relationships.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>Licensed Company</h5>
                            <p>Officially licensed by Pakistan's tourism industry in 2007 with ID number 1058</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Diverse Adventures offered </h5>
                            <p>We offer services From mountaineering to trekking</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Latest Ideologies</h5>
                            <p>TAK presents the latest ideologies of tourism to enhance the tourist experience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Worldwide Welcoming</h5>
                            <p>We welcome international tourists to Pakistan, catering to a diverse clientele.

</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

 <!-- Services Start -->
 <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Journey Beyond Boundaries</h6>
                <h1 class="mb-5">TakPakTour Services</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/mountaineering.png')}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">Mountaineering</h3>
                           
                       
                            <p>Mountaineering Adventures Await in Pakistan</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/mountaineering" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/rock-climbing.jpeg')}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">Rock Climbing</h3>
                            
                            <p>Reach for the Summit , Reaching New Heights in Pakistan</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/rockclimbing" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/tours.jpeg')}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">Tours</h3>
                            
                            <p>Discover Pakistan's Hidden Treasures with Unforgettable Tours</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/tours" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/trekking-pakistan-places.jpeg')}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">Trekking</h3>
                           
                            <p>Discover the thrill of trekking with us</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/trekking" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('frontend/img/special-interest-rafting-kayaking-photography-documentary.png')}}" alt="">
                        </div>
                        
                        <div class="text-center p-4">
                            <h3 class="mb-0">Special Interest</h3>
                           
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam eos</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="/specialinterests" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="/contact" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Destination Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Discover Your Dream Getaway</h6>
                <h1 class="mb-5">Popular Destinations</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s"  style="min-width:400px;">
                            <a class="position-relative d-block overflow-hidden" href="{{ route('fairymeadows.link') }}">
                                <img class="img-fluid" src="{{url('frontend/img/fairy-meadows.jpg')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Fairy Meadows</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">View All</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="{{ route( 'hunza.link' )}}">
                                <img class="img-fluid" src="{{url('frontend/img/hunza.png')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Hunza Valley</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">View All</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s" style="max-height:200px;">
                            <a class="position-relative d-block overflow-hidden" href="{{ route( 'k2.link' )}}">
                                <img class="img-fluid" src="{{url('uploads/files/K2cc_1.jpg')}}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">K-2 Ghandogoro La Trek</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">View All</div>
                            </a>
                        </div> 
                        
                       
                        
                        
                       
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="max-height: 650px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('festival.link') }}">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{url('frontend/img/mountaineering.png')}}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Gilgit Baltistan</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">View All</div>
                    </a>
                </div>
               

                
            </div>
        </div>
    </div>
    <!-- Destination Start -->


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
        <!-- Video Start -->

    <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>Few Facts about TakPakTour</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content ">
                    <div class="count-digit">2007</div>
                    <div class="count-title">Working Since</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">ID-1058</div>
                    <div class="count-title">Registered Company</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">50+</div>
                    <div class="count-title">Destination Explored</div>
                  </div>
                </div> 
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">100</div>
                    <div class="count-title">Customer Satisfaction</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=NlQGwebzpJY&t=11s" target="_blank"><img src="{{url('frontend/img/play-icon.png')}}" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </section>


    

    

   

    <!-- Actvities Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">  Create Your Adventure Story  </h6>
                <h1 class="mb-5">Activities</h1>
            </div>
            <div class="row g-4">
                
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="{{url('uploads/files/Hunting GB.JPG')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="tel:+923345357208"><i class="fa fa-phone"></i></a>
                            <a class="btn btn-square mx-1" href="mailto:info@takpaktour.com"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text-center p-4">
                        <h5 class="mb-0"><a href="{{ route('hunting.link') }}">Hunting</a></h5>
                            <small>Special Interest</small>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{url('uploads/files/docmen1.png')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="tel:+923345357208"><i class="fa fa-phone"></i></a>
                            <a class="btn btn-square mx-1" href="mailto:info@takpaktour.com"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><a href="{{ route('specialInterest.link') }}">Photography</a></h5>
                            <small>Special Interest</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="{{url('uploads/files/Shandooor 111_1.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="tel:+923345357208"><i class="fa fa-phone"></i></a>
                            <a class="btn btn-square mx-1" href="mailto:info@takpaktour.com"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text-center p-4">
                        <h5 class="mb-0"><a href="{{ route('festival.link') }}">Festivals</a></h5>
                            <small>Tours</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="{{url('uploads/files/Skardu-Deosai.jpg')}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href="tel:+923345357208"><i class="fa fa-phone"></i></a>
                            <a class="btn btn-square mx-1" href="mailto:info@takpaktour.com"><i class="fa fa-envelope"></i></a>
                        </div>
                        <div class="text-center p-4">
                        <h5 class="mb-0"><a href="{{ route('jeep.link') }}">Jeep Safari</a></h5>
                            <small>Tours</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- actvities End -->


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
    
