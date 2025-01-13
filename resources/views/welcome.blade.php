<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('layouts.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('layouts.navbar')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    @include('layouts.slider')
    <!-- Carousel End -->


    <!-- Feature Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Happy Customers -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-danger rounded-circle me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                </div>
                <h5 class="mb-3">Satisfied Clients</h5>
                <span>We have proudly served over 3,450 clients across various industries, providing tailored solutions to meet their utility needs.</span>
            </div>

            <!-- Projects Completed -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-danger rounded-circle me-3">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">4234</h1>
                </div>
                <h5 class="mb-3">Contracts Secured</h5>
                <span>With expertise and precision, we have successfully negotiated over 4,200 energy contracts on behalf of our clients.</span>
            </div>

            <!-- Awards Won -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-danger rounded-circle me-3">
                        <i class="fa fa-award text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                </div>
                <h5 class="mb-3">Industry Recognition</h5>
                <span>Our commitment to excellence has earned us over 3,100 awards and accolades within the energy consulting sector.</span>
            </div>

            <!-- Expert Workers -->
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center mb-4">
                    <div class="btn-lg-square bg-danger rounded-circle me-3">
                        <i class="fa fa-users-cog text-white"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                </div>
                <h5 class="mb-3">Professional Team</h5>
                <span>Our team of over 1,800 industry professionals is dedicated to ensuring you receive the best deals and service in the market.</span>
            </div>
        </div>
    </div>
</div> --}}
<!-- Feature End -->

    <!-- Feature Start -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <!-- Heading on Top -->
        <div class="text-center py-4">
            <h2 class="text-danger">About Us</h2>
        </div>
    
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="home/img/about.jpg"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-danger">About Us</h6>
                        <h1 class="mb-4">Here to help your business:</h1>
                        
                        <!-- First two paragraphs are always visible -->
                        <p class="text-dark">UK Marketing Services, a trusted partner delivers transformative solutions
                            in Energy and Telecoms. Our expertise ensures tailored, cost-effective strategies, saving
                            you money through strategic supplier negotiations and competitive rates.</p>
                
                        <p class="text-dark">Reliability is our cornerstone, offering trustworthy service, minimal downtime, and unwavering connectivity.
                            Choosing UK Marketing Services means exceptional service, cost efficiency, time savings, and customized solutions
                            to propel your business forward.</p>
                        
                        <!-- Extra content that will be shown on clicking "Read More" -->
                        <p class="text-dark" id="extra-content" style="display:none;">
                           <b> What we can do for you:</b>
                            Saving Your Business Precious time
                            Our tailored solutions, seamless services, and reliable support minimise hassle for you and
                            maximise time to focus on what you do best!
                        </p>
                        
                        <p class="text-dark" id="extra-content" style="display:none;">
                            <b>Dedicated Account Managers</b>
                            Here at UK Marketing Services, we believe a human connection is essential for successful
                            relationships. So, our customers are given dedicated managers with direct contact details!
                            Get In Contact
                            Helping You To Save Valuable Money
                            Money saved means more money for you to reinvest in your business.
                        </p>
                        
                        <!-- Single Toggle Button -->
                        <a href="javascript:void(0);" class="btn btn btn-danger rounded-pill" id="toggle-btn">Read More</a>
                    </div>
                </div>
                
                <script>
                    // Get the toggle button and extra content paragraphs
                    const toggleBtn = document.getElementById('toggle-btn');
                    const extraContent = document.querySelectorAll('#extra-content');
                
                    // Event listener for toggle button
                    toggleBtn.addEventListener('click', function() {
                        // Check if extra content is visible
                        const isContentVisible = extraContent[0].style.display === 'block';
                
                        if (isContentVisible) {
                            // Hide extra content and change button text to "Read More"
                            extraContent.forEach(content => {
                                content.style.display = 'none';
                            });
                            toggleBtn.textContent = 'Read More'; // Change button text
                        } else {
                            // Show extra content and change button text to "Read Less"
                            extraContent.forEach(content => {
                                content.style.display = 'block';
                            });
                            toggleBtn.textContent = 'Read Less'; // Change button text
                        }
                    });
                </script>
            </div>
        </div>
    </div>
    
    <!-- About End -->


 <!-- Service Start -->
<div class="container-xxl py-5">
    <!-- Heading on Top -->
    <div class="text-center py-4">
        <h2 class="text-danger">Our Services</h2>
    </div>
    
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            {{-- <h6 class="text-danger">Our Services</h6> --}}
            {{-- <h1 class="mb-4">We Are Pioneers In The World Of Renewable Energy</h1> --}}
        </div>
        <div class="row g-4">
            @foreach ($services as $item)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <!-- Service Image -->
                        <img class="img-fluid" 
                             src="{{ asset('images/servicesimages/' . $item->image) }}" 
                             alt="{{ $item->title }}">
                        
                        <div class="position-relative p-4 pt-0">
                            <!-- Service Icon -->
                            <div class="service-icon">
                                <img src="{{ asset('images/icons/' . $item->icon) }}" 
                                     alt="{{ $item->title }} Icon" 
                                     class="img-fluid" style="width: 50px; height: 50px;">
                            </div>
                            
                            <h4 class="mb-3">{{ $item->title }}</h4>
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Service End -->


  <!-- Feature Start -->
<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container feature px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="p-lg-5 ps-lg-0">
                    <h6 class="text-danger">Why Choose Us!</h6>
                    <h1 class="mb-4">Benefits of Working with a Utility Broker</h1>
                    <p class="mb-4 pb-2">Here are five reasons why working with a utility broker can be beneficial:</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <div class="btn-lg-square bg-danger rounded-circle">
                                    <i class="fa fa-lightbulb text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-1">1. Expertise and Experience</h5>
                                    <p class="mb-0">Leverage the knowledge and industry experience of professionals to make informed decisions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <div class="btn-lg-square bg-danger rounded-circle">
                                    <i class="fa fa-dollar-sign text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-1">2. Competitive Pricing</h5>
                                    <p class="mb-0">Utility brokers negotiate with suppliers to get the best rates for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <div class="btn-lg-square bg-danger rounded-circle">
                                    <i class="fa fa-clock text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-1">3. Time Savings</h5>
                                    <p class="mb-0">Avoid the hassle of researching and comparing utility providers yourself.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <div class="btn-lg-square bg-danger rounded-circle">
                                    <i class="fa fa-shield-alt text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-1">4. Risk Management</h5>
                                    <p class="mb-0">Minimize risks with expert advice tailored to your specific utility needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <div class="btn-lg-square bg-danger rounded-circle">
                                    <i class="fa fa-headset text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="mb-1">5. Ongoing Support</h5>
                                    <p class="mb-0">Receive continuous assistance and updates to ensure your utility needs are met effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="home/img/feature.jpg"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->
    <!-- Team Start -->
    @include('layouts.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-danger">Testimonial</h6>
                <h1 class="mb-4">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="home/img/testimonial-1.jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="home/img/testimonial-2.jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="home/img/testimonial-3.jpg">
                        <div class="btn-square bg-danger rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna
                            ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                            clita.</p>
                        <h5 class="mb-1">Client Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->



    @include('layouts.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    @include('layouts.script')
</body>

</html>
