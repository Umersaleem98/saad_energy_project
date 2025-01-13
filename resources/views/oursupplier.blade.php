<!DOCTYPE html>
<html lang="en">

<head>
    <title>Supplier</title>
    @include('pages.head')
    <style>
        .more-content {
            display: none;
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
    @include('pages.topbar')
    @include('pages.navbar')

    <!-- Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Supplier</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Supplier</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-652f04d26a8e6.jpg"
                        class="img-fluid rounded w-100" alt="" style="height: 350px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Our Suppliers</h2>
                    <p class="text-dark">
                        UK Marketing Services is not exclusively aligned or tied to a single Energy supplier. This means we find the best deal in the market to suit your specific business. We are able to provide you a price comparison from a number of suppliers, make a recommendation based on our decades of industry expertise and make sure the contract you finally agree to meets your specific needs. We continually monitor the industry to make sure what we recommend is fit for purpose and the quality of the service you are buying is suitable. We closely check the contractual agreements with our customers so everyone is clear on what you are getting.
                    </p>
                    <div class="more-content">
                        <p class="text-dark">
                            All you need to do is fill out the contact form below and we will give you a call when convenient to yourself, we then look at your business setup, usage, area and will provide a quote based on the best deals available to you. We would like to relationship-build, rather than a one-off transfer, and so we can be your one-stop-shop for utilities, leaving you in confidence to focus your time on your day-to-day business dealings.
                        </p>
                    </div>
                    <button id="toggleButton" class="btn btn-danger">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    @include('pages.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    @include('pages.script')

    <script>
        const toggleButton = document.getElementById('toggleButton');
        const moreContent = document.querySelector('.more-content');

        toggleButton.addEventListener('click', () => {
            if (moreContent.style.display === 'none' || moreContent.style.display === '') {
                moreContent.style.display = 'block';
                toggleButton.textContent = 'Read Less';
            } else {
                moreContent.style.display = 'none';
                toggleButton.textContent = 'Read More';
            }
        });
    </script>
</body>

</html>
