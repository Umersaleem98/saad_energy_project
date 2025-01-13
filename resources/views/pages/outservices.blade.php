<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
    @include('layouts.head')
    <style>
        .hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }
    </style>
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
    @include('layouts.navbar')
    <!-- Topbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">layouts</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <br>
    <div class="container mb-3">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="mb-3 text-center">Electricity Procurement:</h2>
                <p class="text-dark">
                    Electricity is a fundamental necessity, yet navigating the ever-changing energy market can be daunting. Our team of experts works on your behalf to:
                </p>
                <ul>
                    <li>
                        <strong class="text-dark">Source competitive quotes:</strong>
                        <p class="text-dark">
                            We leverage our extensive network of suppliers to secure the most favorable rates for your electricity consumption, whether you're a homeowner or a large-scale enterprise.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Analyze your energy usage:</strong>
                        <p class="text-dark">
                            By understanding your consumption patterns, we can identify opportunities for savings and recommend the most suitable tariff for your needs.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Negotiate contracts:</strong>
                        <p class="text-dark">
                            We handle the complex process of contract negotiations, ensuring you get the best possible terms and conditions.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Explore green energy options:</strong>
                        <p class="text-dark">
                            For those looking to reduce their carbon footprint, we offer access to renewable energy plans.
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Image Section -->
            <div class="col-md-6 order-1 order-md-2">
                <img src="home/img/all_energy_solar_cover.jpg" alt="Descriptive Alt Text" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container mb-3">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="home/img/all_energy_solar_cover.jpg" alt="Descriptive Alt Text" class="img-fluid">
            </div>
            <!-- Text Section -->
            <div class="col-md-6 order-1 order-md-2">
                <h2 class="mb-3 text-center">Gas Supply Management:</h2>
                <p class="text-dark">
                    Similar to electricity, gas tariffs can vary significantly between providers. We offer a similar service for your gas supply, helping you:
                </p>
                <ul>
                    <li>
                        <strong class="text-dark">Compare gas rates: </strong>
                        <p class="text-dark">
                            We diligently compare tariffs from multiple suppliers to find the most economical options.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Negotiate optimal contracts:</strong>
                        <p class="text-dark">
                            We work to secure gas supply contracts that align with your usage and budget.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Manage contract renewals: </strong>
                        <p class="text-dark">
                            We proactively manage your contract renewals, ensuring you don’t roll onto unfavorable rates.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Stay ahead of market trends:</strong>
                        <p class="text-dark">
                            We monitor market fluctuations to help you make informed decisions regarding your gas supply.
                        </p>
                    </li>
                </ul>

            </div>
        </div>
    </div>

  

    <div class="container mb-3">
        <div class="row align-items-center">
            <!-- Image Section -->
          
            <!-- Text Section -->
            <div class="col-md-6 order-md-1">
                <h2 class="mb-3 text-center">Telecom and Broadband Solutions:</h2>
                <p class="text-dark">
                    Staying connected is critical for both personal and professional lives. We simplify your telecom and broadband needs by:
                </p>
                <ul>
                    <li>
                        <strong class="text-dark">Comparing provider packages: </strong>
                        <p class="text-dark">
                            We navigate the complexities of telecom and broadband packages, presenting you with the most suitable options.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Securing the best deals:</strong>
                        <p class="text-dark">
                            We negotiate with providers to find competitive rates and plans tailored to your specific requirements.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Managing contract terms: </strong>
                        <p class="text-dark">
                            We review contracts to ensure transparency and that they are working in your favor.
                        </p>
                    </li>
                    <li>
                        <strong class="text-dark">Providing seamless service:</strong>
                        <p class="text-dark">
                            We aim to make the switching process smooth and hassle-free.
                        </p>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 order-md-2">
                <img src="home/img/all_energy_solar_cover.jpg" alt="Descriptive Alt Text" class="img-fluid">
            </div>
        </div>
    </div>
    

    @include('layouts.footer')

    @include('layouts.script')
</body>

</html>
