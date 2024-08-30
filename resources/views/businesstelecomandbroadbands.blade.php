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
    @include('pages.topbar')
    @include('pages.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h6 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Telecom and Broadband</h6>
            <p>
            Our telecom & broadband packages provide you with competitive phone and broadband/fibre solutions to fit your individual business requirements. With flexible phone plans and multiple broadband and fibre packages, no matter your business type or location we can offer a solution.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-653976a5c9166.jpg" class="img-fluid rounded w-100" alt="" style="height: 350px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <h2 class="mt-3">Finding the right provider</h2>
                    <p class="mt-4">
                    With many broadband providers available across the UK, there are usually many options when searching for a new deal.
                    </p>
                    <p>
                    UK Marketing LTD hosts a range of brands that we trust to deliver a fantastic service for different needs. To find the right service for you and your business, you can compare offers from the UK’s top broadband suppliers.
                    </p>
                </div>
            </div>

            <!-- Second Row Start -->
            <div class="row g-5 mt-5">
                <div class="col-md-6 order-2 order-md-1">
                    <h2>Switching providers</h2>
                    <p>
                    Switching providers is often a very simple process. Our study found that UK broadband customers are missing out on £1.85 billion in savings each year¹ because of misplaced concerns about switching. But signing up to a better deal is almost always worth the process, when you consider the amount of money that could be saved. Here’s what happens when you switch:
                    </p>
                    <p>
                        <ul>
                            <li>
                            Once you've chosen a deal, you'll be sent to the provider's website to sign up.
                            </li>
                            <li>
                            Add your details, confirm the broadband deal you want and select any add-ons you'd like too.
                            </li>
                            <li>
                            When you're signing up, your new provider will show you all the charges you'd be expected to pay during your contract.
                            </li>
                            <li>
                            You can also choose the date you want to start your new connection.
                            </li>
                            <li>
                            After the purchase is completed, you'll get a confirmation email from your provider and it will start the process to activate your connection on your chosen date.
                            </li>
                            <li>
                            You might need to cancel your old contract yourself. Read below to see if you need to contact your current provider.
                            </li>
                        </ul>
                    </p>
                  
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-6539774180d6f.jpg" class="img-fluid rounded w-100" alt="" style="height: 500px; object-fit: cover;">
                </div>
            </div>
            <!-- Second Row End -->

        </div>
    </div>
    <!-- Contact End -->
  
    @include('pages.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    @include('pages.script')
</body>

</html>
