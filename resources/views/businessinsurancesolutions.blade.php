<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.head')
    <!-- Custom CSS -->
    <style>
        .custom-card {
            background-color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
            height: 100%;
        }

        .custom-card:hover {
            background-color: red;
            color: white;
        }

        .custom-card:hover .card-title,
        .custom-card:hover .card-text {
            color: white;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
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
    @include('pages.navbar')
    <!-- Topbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Insurance Solution</h4>
            <p class="text-light">
            Our teams are passionate about offering best-in-class customer service. Finding the right deal on your business or property insurance can be time consuming. We are here to make it simple – Use our experts.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h2>What is business insurance for?</h2>
                    <p>
                    Whether it’s a third party injury or a serious professional indemnity claim, if you run a small business, there’s a risk that something will go wrong. From public liability insurance to employers’ liability cover, professional indemnity insurance risks and specific trade and equipment insurance, business or commercial insurance can combine comprehensive cover for the specific challenges you face.
                    </p>
                    <p>
                       <ul>
                       <li>
                        Compare business insurance quotes from globally-recognised and trusted brands
                        </li>
                        <li>
                        Trusted by over 900,000 small UK businesses for flexible, tailored cover
                        </li>
                        <li>
                        Peace of mind, letting you focus on your business, not the what-ifs
                        </li>
                       </ul>
                    </p>
                </div>
                <div class="col-md-6">
                <img src="home/img/about-img.jpg" class="card-img-top img-fluid hover-effect" style="height:400px;" alt="Card Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <div class="container mb-5">
    <div class="row">
        <!-- Image Card -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="card-title">Image</h1>
                </div>
            </div>
        </div>
        
        <!-- Text and Sub-Cards -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">An end-to-end service through the entire contract journey...</h3>
                    <div class="row mt-3">
                        <!-- Sub-Card 1 -->
                        <div class="col-md-4 mb-2">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Public Liability Insurance</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Sub-Card 2 -->
                        <div class="col-md-4 mb-2">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Employers' Liability Insurance</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Sub-Card 3 -->
                        <div class="col-md-4 mb-2">
                            <div class="card h-100">
                                <div class="card-body text-center">
                                    <h6 class="card-title">Professional Indemnity Insurance</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    @include('pages.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

    @include('pages.script')
</body>

</html>
