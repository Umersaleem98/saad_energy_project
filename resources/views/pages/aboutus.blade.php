<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>


    <!-- Spinner End -->

    @include('layouts.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    @include('layouts.navbar')
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
   

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">layouts</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-danger rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                    </div>
                    <h5 class="mb-3">Happy Customers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-danger rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                    </div>
                    <h5 class="mb-3">Project Done</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-danger rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                    </div>
                    <h5 class="mb-3">Awards Win</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-danger rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                    </div>
                    <h5 class="mb-3">Expert Workers</h5>
                    <span>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Feature Start -->
    

    <!-- About Start -->
   <!-- About Us Section Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <!-- Top Heading -->
    <div class="text-center py-4">
        <h2 class="text-danger">About Us</h2>
    </div>
    
    <div class="container about px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="home/img/about.jpg" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    {{-- <h6 class="text-danger">About Us</h6> --}}
                    <h1 class="mb-4">Here to help your business:</h1>
                    <p class="text-dark">UK Marketing Services, a trusted partner delivers transformative solutions in Energy and Telecoms. Our expertise ensures tailored, cost-effective strategies, saving you money through strategic supplier negotiations and competitive rates. </p>
                    <p class="text-dark">Reliability is our cornerstone, offering trustworthy service, minimal downtime, and unwavering connectivity. Choosing UK Marketing Services means exceptional service, cost efficiency, time savings, and customized solutions to propel your business forward.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- About End -->
<!-- New Section Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side (Text) -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="mb-4">What we can do for you:</h2>
                <p class="text-dark">Saving Your Business Precious time</p>
                <p class="text-dark">Our tailored solutions, seamless services, and reliable support minimise hassle for you and maximise time to focus on what you do best!</p>
            </div>

            <!-- Right Side (Image) -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <img src="home/img/images.jpg" class="img-fluid" alt="Our Vision" style="width: 100%">
            </div>
        </div>
    </div>
</div>
<!-- New Section End -->

<!-- New Section Start -->
<div class="container-fluid py-5 my-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side (Image) -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <img src="home/img/all_energy_solar_cover.jpg" class="img-fluid" alt="Our Vision" style="width: 100%">
            </div>

            <!-- Right Side (Text) -->
            <div class="col-lg-6 wow text-dark" data-wow-delay="0.5s">
                <h2 class="mb-4 text-dark">Dedicated Account Managers</h2>
                <p class="text-dark">Here at UK Marketing Services, we believe a human connection is essential for successful relationships. So, our customers are given dedicated managers with direct contact details!
                    Get In Contact
                    Helping You To Save Valuable Money
                    </p>
                <p class="text-dark">Money saved means more money for you to reinvest in your business</p>
            </div>
        </div>
    </div>
</div>
<!-- New Section End -->


    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-danger">Team Member</h6>
                <h1 class="mb-4">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                @foreach ($teams as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img src="{{ asset('images/teams/' . $item->image) }}" alt="teams">

                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>{{ $item->name }}</h5>
                            <span>{{ $item->designation }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
     --}}
    
    @include('layouts.footer')
    @include('layouts.script')
</body>

</html>
