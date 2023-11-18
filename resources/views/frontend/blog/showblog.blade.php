@extends('frontend.layouts.main')
@section('main-container')

<div class="container-fluid bg-primary py-5 mb-5" style="background: linear-gradient(rgba(20, 20, 31, .7), rgba(20, 20, 31, .7)), url('{{ asset('uploads/' . $blog->image) }}'); background-position: center center; background-repeat: no-repeat; background-size: cover;min-height:100px;">
<div class="container py-5" >
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">{{ $blog->title }}</h1>
                        
                       
                    </div>
                </div>
            </div>

</div>
          
           

    <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-image">
          </div>
          <div class="main-content">
            <span class="category">blog</span>
            <h4>{{ $blog->title }}</h4>
            <p id="datbase_text">{{ $blog->content }}</p>
          </div> 
        
        </div>
        
      </div>
    </div>
  </div>




    @endsection
