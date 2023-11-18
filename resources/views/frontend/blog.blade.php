@extends('frontend.layouts.main')
@section('main-container')
<!--- hero section for other-pages -->
<div class="container-fluid bg-primary py-5 mb-5" id="hero-header-mountaineering">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Blogs</h1>
                        
                        <p class="fs-4 text-white mb-4 animated slideInDown"></p>
                       
                    </div>
                </div>
            </div>
        </div>
        <?php
        
            $blogs = DB::table('blogs')->paginate(10);
        ?>

       
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Blogs articles</h6>
                <h1 class="mb-5">Find out the amazing articles related to tourism in Pakistan</h1>
            </div>
           <!-- Services Start -->
            <div class="row g-4 justify-content-center">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('uploads/' .$blog->image) }}" alt="{{ $blog->title }}">
                   </div>
                   
                        
            <div class="package">
                
                <!-- Add other package details here -->
            </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">{{ $blog->title }}</h3>
                           
                            <p>{{ $blog->title }}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="{{ route('blog.showblog', ['id' => $blog->id,'slug' => $blog->slug]) }}"   class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                               

                            
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach
                
                   <!-- Pagination links -->
        <!-- Custom pagination links with only "Previous" and "Next" -->
        
                
            </div>
        </div>
    </div>

</div>
    <!-- Services End -->

    

    @endsection
