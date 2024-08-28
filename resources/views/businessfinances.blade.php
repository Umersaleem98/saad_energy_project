<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.head')
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
    @include('pages.topbar')
    @include('pages.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h6 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Finance</h6>
            <p>
                Business finance is a catch-all term that covers a range of funding options open to businesses of all sizes, including overdrafts, loans, commercial mortgages, and everything in between.
            </p>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-3">
        <div class="container py-5">
        <div class="row g-5 mt-5">
                <div class="col-md-6 order-2 order-md-1">
                    <!-- <h2>Water Suppliers</h2> -->
                    <p class="mt-5">
                    When you’re setting up or growing a business, you may need loan finance to help with the costs. A business loan is different from a personal loan in that you will need to provide information about your business, its turnover and its profit. Business loans can be short term or long term, but all involve paying a set amount of interest on a lump sum borrowing amount. Different loans are available for different circumstances, so it helps to have a clear idea of exactly what you need the money for before you compare business finance loans.
                    </p>
                
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-652d50060c10e.jpg" class="img-fluid rounded w-100" alt="" style="height: 340px; object-fit: cover;">
                </div>
            </div>
            <!-- Second Row Start -->
            <div class="container mb-5 mt-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h6 class="card-title">90% Approval Rate</h6>
                        <p class="card-text">No security or business plans required. No admin fees, APRs or additional fees. Some approvals can also be instant depending on size of borrowing.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h6 class="card-title">
                        Flexible Payments</h6>
                        <p class="card-text">No fixed terms or monthly repayments. Repayments are taken from a small percentage of your future card sales> we have many options available to suit your needs.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card custom-card h-100">
                    <div class="card-body">
                        <h6 class="card-title">Quick and Easy</h6>
                        <p class="card-text">Quick and easy application, with funds arriving in your account in days or even hours, depending on the approval time and size of the borrowing.</p>
                    </div>
                </div>
            </div>

         
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
