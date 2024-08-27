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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Energy Solution</h4>
            <p class="text-light">
                With fluctuating prices and import requirements increasing, utilizing our comparison service can provide significant savings as well as long-term price protection.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h2 class="text-capitalize text-primary mb-3">What types of business tariffs are there?</h2>
                    <p class="mb-0">There are different types of business energy tariffs, so before starting your comparison, it may be worth exploring the options.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <div class="container mb-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">1- Renewables & Green Contracts</h5>
                        <p class="card-text">With more focus on protecting our planet, greener contracts are a great first step on the journey to net zero carbon.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">2- Fixed Contracts</h5>
                        <p class="card-text">Provide business customers with budget certainty for a fixed duration of time. Contracts usually range from 1 year to 5 years.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">3- Pass Through Contracts</h5>
                        <p class="card-text">Similar to fixed priced contracts but some charges are passed through when they change. These contracts are increasingly common due to uncertainty in some costs.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">4- Flexible Contracts</h5>
                        <p class="card-text">Usually for larger business customers, these contracts allow customers to lock in their gas and electricity in smaller chunks. This spreads the risk of making a single buying decision.</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">5- Variable Tariffs</h5>
                        <p class="card-text">If you do nothing at the end of your contract, you will roll onto a variable tariff. You still need to provide 30 day’s notice if you want to leave, and prices can be over 3 times higher than a fixed-term contract.</p>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h5 class="card-title">6- Water Pricing</h5>
                        <p class="card-text">We are focused on providing our valuable customers with every opportunity to seamlessly cross-sell water and the best prices for their water tariff.</p>
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
