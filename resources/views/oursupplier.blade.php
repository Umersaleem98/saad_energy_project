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
    @include('pages.topbar')
    @include('pages.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Strong Relationship with Our
                Suppliers</h4>

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
                    <h2>Energy Suppliers</h2>
                    <p>
                        How we can help you switch business energy suppliers. We work with the top business energy
                        suppliers to compare business energy quotes and get you the best energy deal for your business.
                        As you can see, we don’t only negotiate contracts with the biggest energy suppliers; we also
                        compare quotes from smaller energy suppliers that may have products, packages and prices more
                        suitable to your needs. By conducting a wide comparison of the different energy contracts
                        offered by a range of suppliers, we can find the option that is right for your business.
                    </p>
                    <p>
                        No matter the size of your business, let us do the hard work by comparing suppliers and finding
                        the best deal that works for you!
                    </p>
                </div>
            </div>

            <!-- Second Row Start -->
            <div class="row g-5 mt-5">
                <div class="col-md-6 order-2 order-md-1">
                    <h2>Water Suppliers</h2>
                    <p>
                        April 2017 saw the deregulation of water in England, allowing organisations to join those in
                        Scotland, giving them freedom to choose their retail water supplier.
                    </p>
                    <p>
                        The system allows non-domestic customers to have the opportunity to choose their retail water
                        supplier as opposed to the previous method of having to buy retail water services directly from
                        the regional water company.
                    </p>
                    <p>
                        This subsequently allowed organisations in England to control and potentially save money on
                        their water bills. Being able to choose separate retailers for both their water retail services
                        and another for their wastewater services allows a company to shop around.
                    </p>
                    <p>
                        Retailer prices are constantly changing; renegotiating or switching retailers should be
                        considered by your business to ensure you are never paying too much.
                    </p>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/582c788c-940b-49e2-908a-3468af11ba56-1024x682.jpg"
                        class="img-fluid rounded w-100" alt="" style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <!-- Second Row End -->

        </div>
    </div>
    <!-- Contact End -->

    @include('pages.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>

    @include('pages.script')
</body>

</html>
