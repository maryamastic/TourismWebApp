<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TakPakTour-Tourism in Pakistan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('frontend/img/favicon-takplanet.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontendlib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Rawalpindi,Pakistan</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+92 3345357208</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i> info@takpaktour.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://pk.linkedin.com/in/abdul-basit-travel-amazing-karakoram-49292b22b?trk=public_post_feed-actor-name"><i class="fab fa-linkedin fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/takPakistan/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Ftak.planet%3Ffbclid%3DIwAR0O6ezl8NsmBhZWm9Ke7C7W2Cxf8PT1g-5x8XNiyK_uHZleJ8OfteAyA-I&h=AT3h-caCf_G9iSktYNRFxiT82mZPBMQEdxaY1r_9ziV_i4AD7lIZAEvPVyBSCeQ2Tx551AP32h9hEBxj9SZhzYfyUdoOzg88fV8_7yuA83GilBr4QVqDKNEmMj37VSQKOxfPwC0yZ_QrZ7m6"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/@worldadventureland/featured"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{url('/')}}" class="navbar-brand p-0">
               <!-- logo text <h1 class="text-primary m-0"><i class="fa fa-globe me-3"></i>TakPakTour</h1> -->

  <img src="{{url('frontend/img/logorbg.png')}}" alt="siteName"></a>

                        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{url('/mountaineering')}}" class="dropdown-item">Mountaineering</a>
                            <a href="{{url('/rockclimbing')}}" class="dropdown-item">Rock Climbing</a>
                            <a href="{{url('/tours')}}" class="dropdown-item">Tours</a>
                            <a href="{{url('/trekking')}}" class="dropdown-item">Trekking</a>
                            <a href="{{url('/specialinterests')}}" class="dropdown-item">Special Interests</a>
                        </div>
                    </div>
                    <a href="{{url('/blog')}}" class="nav-item nav-link">Blog</a>

                    <a href="{{url('/contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <a href="{{url('/contact')}}" class="btn btn-primary rounded-pill py-2 px-4">Book Now</a>
            </div>
        </nav>

    </div>
    <!-- Navbar & Hero End -->
