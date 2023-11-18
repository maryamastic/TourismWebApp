@extends('frontend.layouts.main')
@section('main-container')
<!--- hero section for other-pages -->
<div class="container-fluid bg-primary py-5 mb-5" id="hero-header-contact">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Let's explore the wonders of Pakistan together!</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Have questions about your next adventure in Pakistan or need assistance planning your trip? Our team of travel enthusiasts is here to help.




</p>
                      
                    </div>
                </div>
            </div>
        </div>
        
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">Office # 106, 2nd Floor, Malikabad Plaza, Murree Road, Rawalpindi, Punjab, Pakistan</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">+92 3345357208</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@takpaktour.com</p>
                        </div>

                        
                    </div>

                    <div class="d-flex align-items-center" style="margin-top:20px;">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Website</h5>
                            <p class="mb-0">takpaktour.com</p>
                        </div>

                        
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form  action="{{ url('contact_mail') }}"  method="post">
                    {{ csrf_field() }}
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            
            <div class="row g-4" style="margin-top:80px;">

            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Find Us on map</h6>
                <h1 class="mb-5">Your Path to Reach Us</h1>
            </div>
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    

                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13286.599625051056!2d73.05732481633729!3d33.640318393851295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95e9810591ed%3A0x2d4a4dd85510a64b!2sTravel%20Amazing%20Karakoram!5e0!3m2!1sen!2s!4v1695693544004!5m2!1sen!2s"  style="min-height: 800px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                        </div></div>
        </div>
    </div>
    <!-- Contact End -->


    @endsection
