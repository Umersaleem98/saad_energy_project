<!DOCTYPE html>
<html lang="en">

    <head>
  
  
        @include('pages.head')

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
       @include('pages.topbar')
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        @include('pages.navbar')
        <!-- Navbar & Hero End -->

        <!-- Carousel Start -->
        @include('pages.slider')
        <!-- Carousel End -->

        <!-- Features Start -->
        @include('pages.about_us')

        @include('pages.outservices')
        @include('pages.partnerandsupplier')
        @include('pages.othercontent')


        
      @include('pages.footer')
        <!-- Footer End -->
        
       


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
@include('pages.script')
    </body>

</html>