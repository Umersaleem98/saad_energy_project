<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.head')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('pages.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    @include('pages.navbar')
    <!-- Navbar & Hero End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <p class="text-start text-light">
                Through a blend of technology and industry experts, brokers have access to competitive pricing and
                exclusive products across the utility markets. All available via our energyengine® system, it enables
                our brokers to build successful businesses.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item">
                        <div class="pb-5">
                            <h1 class="display-5 text-capitalize">Who <span class="text-primary">are we?</span></h1>
                            <h4 class=" text-capitalize">Trusted <span class="text-primary">& experienced</span></h4>
                            <p class="mb-0">UK Marketing LTD for Business is a trusted and Ofgem accredited energy
                                comparison site and we have helped thousands of businesses.
                            </p>

                            <ul class="mt-4">
                                <li class="mb-4">
                                    We'll show you how you could save money on your business energy deal, with access to
                                    exclusive tariffs even with your current supplier.</li>

                                <li class="mb-4">
                                    Our UK-based experts will help you navigate the energy market and find the best
                                    deals with a free, no-obligation quote
                                </li>

                                <li class="mb-4">
                                    When the time is right for you to switch and save again, we can proactively take
                                    care of it all for you, leaving you to take care of business.
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="about-img">
                        <div class="img-1">
                            <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2024/08/istockphoto-1352603244-612x612-1.jpg"
                                class="img-fluid rounded h-100 w-100" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid steps py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize text-white mb-3">Our Company <span
                        class="text-primary">Values</span></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
                    <div class="steps-item p-4 mb-4 w-100 d-flex flex-column" style="background-color: #E6011F;">
                        <h4 class="text-white">Honesty</h4>
                        <p class="mb-0 text-white">We firmly believe in honesty and fair work values.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex wow fadeInUp" data-wow-delay="0.5s">
                    <div class="steps-item p-4 mb-4 w-100 d-flex flex-column" style="background-color: #E6011F;">
                        <h4 class="text-white">Goal</h4>
                        <p class="mb-0 text-white">Our goal is to become your utility department, so you can be assured
                            that your business utility needs are managed by experts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6">
                <img src="home/img/about-img.jpg" class="img-fluid rounded w-100"
                    style="height: 300px; object-fit: cover;" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="h4 h-md-2 mt-4 p-2 mb-2 text-dark">We are proud of our utilities experts</h2>
                <p class="text-dark mt-3 p-2">Utilities are part of every business regardless of size and represent a
                    large part of a business’s expenditure – directly impacting profit and growth. At Global Utilities
                    Marketing, we pride ourselves on our reputation of delivering outstanding utility management
                    services that are channeled towards our clients’ business goals and expectations. Our clients trust
                    us to manage their utility costs, support them towards becoming carbon neutral, and ultimately
                    reduce energy costs.</p>
            </div>
        </div>
    </div>



    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('pages.footer')
    @include('pages.script')
</body>

</html>
