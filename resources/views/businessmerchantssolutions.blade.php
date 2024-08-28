<!DOCTYPE html>
<html lang="en">

<head>
    @include('pages.head')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 border-0 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    @include('pages.topbar')
    @include('pages.navbar')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Merchants Solution</h4>
            <p class="text-left text-light">
            In the fast changing payment industry we have invested in the latest technology to keep your business competitive.
            Take card payments in-store with Apple and Google Pay as standard. Online with a fast and 3D secure payment gateway or improve your whole operation with an ultra-smart ePOS system to manage stock and every day business operations.
            </p>
            <p class="text-left text-light">
                <ul class="text-left text-light">
                    <li>Latest in secure payments</li>
                    <li>Guaranteed savings against your current processing fees</li>
                    <li>Gold standard ePOS systems with a powerful WBO (web back office) software and POS advertising.</li>
                    <li>Partnerships with the biggest banking entities in the world
                    </li>
                    <li>Funding options to grow your business</li>
                </ul>
            </p>
            
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-3">
        <div class="container py-5">
            

            <!-- Second Row Start -->
            <div class="row g-5 mt-5">
                <div class="col-md-6 order-2 order-md-1">
                    <h2>Chip & Pin Services</h2>
                    <p>
                    We selected AcceptCards as our payments services partner as their service mirrors ours with their professional approach and access to providers across the market. Equally, we want our customers to be as valued to any of our partners as they are to us. AcceptCards ethos of customer excellence and long-term service and support was always at the top of the list when seeking a merchant services partner to work closely with.
                    </p>
                    <p>
                    Made up of a team of banking and finance professionals, AcceptCards have unrivalled knowledge in all areas of card acceptance (retail, mail order to website payments), which means they can quickly understand your business and match the solution to your requirements, whilst still offering you savings of typically 40% against your existing costs.
                    </p>
                   
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-65399079377e0.jpg" class="img-fluid rounded w-100" alt="" style="height: 400px; object-fit: cover;">
                </div>
            </div>
            <!-- Second Row End -->
            <div class="row g-5 mt-4 mb-5">
                <div class="col-md-6">
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com-6539913fabbad.jpg" class="img-fluid rounded w-100" alt="" style="height: 400px; object-fit: cover;">
                </div>
                <div class="col-md-6">
                    <h2>Who are they ideal for?</h2>
                    <p>
                    All retail, leisure and restaurant businesses. If you’re looking for greater management and control of your business.
                    </p>
                    <p>
                        <ul>
                            <li>Features and benefits</li>
                            <li>Loyalty systems, speedier transactions</li>
                            <li>Easier reporting and a complete overview of your business</li>
                            <li>Complete stock control with customisable dash boards</li>
                            <li>Access the management system from any device</li>
                            <li>Improve staff performance and remove manual errors/double keying</li>
                            <li>Set different levels of authority</li>
                            <li>Select from a wide range of bespoke apps to enhance your business & customers experience eg split billing,</li>
                            <li>loyalty, table planning, queue bust with a pre-order app.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
  
    <div class="container mt-2 mb-5">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Card Machine</h5>
                        <p class="card-text">From countertop, portable to mobile, we’ve a machine to suit your business.</p>
                    </div>
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/GetPaidStock.com_-65398e52166ac-removebg-preview.png" class="card-img-bottom img-fluid mt-5 p-2" alt="Image 1" style="height: 200px; object-fit: cover;">
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <h5 class="card-title">Online Payments</h5>
                        <p class="card-text">Payment gateway, pay by link, payment app or virtual terminal. We have a range of options to suit your needs.</p>
                    </div>
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/online-payment-3-removebg-preview.png" class="card-img-bottom img-fluid mt-5 p-2" alt="Image 2" style="height: 200px; ">
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <h5 class="card-title">POS Systems</h5>
                        <p class="card-text">POS Systems is an all-in-one point-of-sale system built for independent businesses to help them make smart decisions.</p>
                    </div>
                    <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2023/10/pngwing.com-2-768x585.png" class="card-img-bottom img-fluid mt-5 p-2" alt="Image 3" style="height: 200px;">
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
