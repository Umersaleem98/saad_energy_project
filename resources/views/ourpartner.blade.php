<!DOCTYPE html>
<html lang="en">

    <head>
       @include('pages.head')
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

        <!-- Navbar & Hero Start -->
       
        <!-- Navbar & Hero End -->

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Partners</h4>
                <p class="text-light">
                We are proud to partner with a number of associations and commercial organisations across the country to help more organisations across the UK save money on their business essential services.
                </p>
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                    <h1 class=" text-capitalize text-primary mb-3">Energy & Utility Brokers</h1>
                    <p class="mb-0">With operating a successful partnership programme, we have refined an industry-leading suite of energy services fully supported by our dedicated partner team. Market leading commission opportunity, Quality of Service, Marketing, Leading technology solutions, Dedicated partner support, Capable of delivering to all market sectors, and A more flexible way of working</p>
                </div>

                </div>
            </div>
        </div>
        <!-- Contact End -->

        <div class="container mb-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100 p-3">
                <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2024/08/istockphoto-1440504624-612x612-1.jpg" class="card-img-top img-fluid hover-effect" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3 p-2">Start-up brokers</h5>
                    <p class="card-text">Offer your customers additional cost-saving services. We’re constantly scanning the markets to help business customers find the best energy contracts, and we can do it for your customer base too. Not only will this reduce their utility bills but it will also generate commission and customer loyalty for you. We already work with a variety of buying groups, franchise organisations, and individual companies who simply connect us to their customers or provide our services, with a little help from us.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 p-3">
                <img src="https://globalutilitiesmarketing.co.uk/wp-content/uploads/2024/08/istockphoto-1456339578-612x612-1.jpg" class="card-img-top img-fluid hover-effect" alt="Card Image">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3 p-2">Established energy consultants</h5>
                    <p class="card-text">Once you are a UK Marketing LTD  partner, you can receive a regular income based on sales achieved. We make it easy for you to track the progress of your sales with regular system-generated reports sent directly to you. Connect us to your customers or members that will be interested in our services and we will effortlessly ensure that you generate additional income from your contacts and, at the same time, your customers will benefit from great energy and water prices.</p>
                </div>
            </div>
        </div>
       
    </div>
</div>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto text-center">
            <h2>Affiliate Partnerships</h2>
            <p>
            The relationship will allow you to offer our exclusive energy, water & payment solution products to your clients. We understand the need for long lasting relationships therefore its imperative you partner with a company that will treat you and your client with transparency and market leading customer care. Our proposition will allow an additional residual revenue stream to your business and additional value-added service to offer to your customers. We have found that our partners have created enormous goodwill and loyalty by offering these services.
            </p>
        </div>
    </div>
</div>


       
        
      @include('pages.footer')


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    @include('pages.script')
    </body>

</html>