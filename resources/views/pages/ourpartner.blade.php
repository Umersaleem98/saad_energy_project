<!DOCTYPE html>
<html lang="en">

<head>
    <title>Partners</title>
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
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('layouts.topbar')
    @include('layouts.navbar')
    <!-- Topbar End -->

    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Partners</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">layouts</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Partners</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Contact End -->

   <div class="container">
    <h2 class="text-dark text-center mb-5">Out Partner</h2>    
    <div class="row">
        <div class="col-md-6">
            <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2024/08/istockphoto-1440504624-612x612-1.jpg"
            class="card-img-top img-fluid hover-effect" alt="Card Image">
        </div>
        <div class="col-md-6">

            <p class="text-dark">
                Navigating the complexities of utility procurement can be a daunting task for any business. That's where we come in. As a leading utility broker, we've established strong partnerships with a diverse network of both large and small utility suppliers. This unique position allows us to access a wide range of options, ensuring we find the most competitive rates and tailored solutions for your specific energy needs. Whether you're a small startup or a large corporation, our expertise and comprehensive supplier relationships mean you benefit from increased choice, cost savings, and streamlined procurement. We do the legwork, so you can focus on what you do best: growing your business.
            </p>
        </div>
    </div>
   </div>




    @include('layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    @include('layouts.script')
</body>

</html>
