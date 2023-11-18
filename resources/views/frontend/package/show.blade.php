@extends('frontend.layouts.main')
@section('main-container')

<div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url('{{ asset('uploads/' . $package->PackageImage) }}'); background-position: center center; background-repeat: no-repeat; background-size: cover;min-height:100px;">
<div class="container py-5" >
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $package->PackageName }}</h1>
                        
                        <p class="fs-4 text-white mb-4 animated slideInDown">{{ $package->PackageType }} / {{ $package->PackageName }}</p>
                       
                    </div>
                </div>
            </div>

</div>
          
           

    <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
           <!-- ***** <img src="{{ asset('uploads/' . $package->PackageImage) }}" width="800px" height="500px" alt="">***** -->
          </div>
          <div class="main-content">
            <span class="category">{{ $package->PackageType }} / {{ $package->PackageName }}</span>
            <h4>{{ $package->PackageName }}</h4>
            <p id="datbase_text">{{ $package->PackageDetails }}</p>
          </div> 
        
        </div>
        <div class="col-lg-4">
          <div class="info-table">
            <ul>
              <li>
                <img  src="{{url('frontend/img/icons8-deadline-50.png')}}" alt="" >
                <h5  id="package_features">{{ $package->Deadline }} </h5><h6 id="package_features_subhead"><span>Deadline</span></h6>
              </li>
              <li>
              <img  src="{{url('frontend/img/icons8-days.png')}}" alt="" style="max-width: 52px;">
              <h5  id="package_features">{{ $package->Duration }} Days </h5><h6 id="package_features_subhead"><span>Duration</span></h6>
              </li>
              <li>
              <img  src="{{url('frontend/img/icons8-altitude-52.png')}}" alt="" style="max-width: 52px;">
              <h5  id="package_features">{{ $package->Altitude }} </h5><h6 id="package_features_subhead"><span>Altitude</span></h6>
              </li>
              <li>
              <img  src="{{url('frontend/img/icons8-price-52.png')}}" alt="" style="max-width: 52px;">
              <h5  id="package_features">{{ $package->PackagePrice }} </h5><h6 id="package_features_subhead"><span>Price</span></h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="section best-deal" style="margin-top:100px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h6 style="color:#f4c444">| Essential Details</h6>
            <h2>Crafting Memorable Journeys</h2>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Included-tab" data-bs-toggle="tab" data-bs-target="#Included" type="button" role="tab" aria-controls="appartment" aria-selected="true">Inc/Exc</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button" role="tab" aria-controls="villa" aria-selected="false">Features</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse" type="button" role="tab" aria-controls="penthouse" aria-selected="false">Essentials</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="Included" role="tabpanel" aria-labelledby="Included-tab">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="info-table">
                      <h3 style="color:#2C3E50">| Included</h3>

                     <p id="datbase_text">    {!! nl2br(e($package->include)) !!}
</p>
                      </div>
                    </div>
                   
                    <div class="col-lg-6">
                    <div class="info-table">

                    <h3 style="color:#2C3E50">| Excluded</h3>

                    <p id="datbase_text"> 
                    {!! nl2br(e($package->not_include)) !!}    
                  </p>
                   </div></div>
                  </div>
                </div>
                <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="info-table">
                      <h3 style="color:#2C3E50">| Features</h3>
                      
                      <p id="datbase_text">{!! nl2br(e($package->feature)) !!}</p>

                        
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                    <h3 style="color:#2C3E50">Contact Us for Booking</h3>
                      <p id="datbase_text">Contact us to book your desired package on a specific date, tell us all of your requirements.</p>
                      <div class="icon-button">
                        <a href="http://127.0.0.1:8000/contact"><i class="fa fa-calendar"></i> Inquire us</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="info-table">
                      <h3 style="color:#2C3E50">| Essentials</h3>
                      <p id="datbase_text">{{ $package->essential }}</p>

                        
                      </div>
                    </div>
                    
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    
  </div>

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


    @endsection
