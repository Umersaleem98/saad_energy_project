<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-danger">
                    <a href="{{ url('/') }}" class="navbar-brand p-0">
                        <img src="home/img/logo.png" alt="Logo" style="width:100%; height:80px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                            <a href="{{ url('about-us') }}" class="nav-item nav-link">About Us</a>
                            <!-- <a href="service.html" class="nav-item nav-link">Service</a> -->

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Services
                                </a>
                                <div class="dropdown-menu m-0">
                                    <a href="{{ url('energy-solution') }}" class="dropdown-item">Energy Solution</a>
                                    <a href="{{url('business-insurance-solution')}}" class="dropdown-item">Business Insurance Solution</a>
                                    <a href="{{url('business-telecom-and-broadband')}}" class="dropdown-item">Business Telecom and Broadband</a>
                                    <a href="{{url('business-finance')}}" class="dropdown-item">Business Finance</a>
                                    <a href="{{url('business-merchants-solution')}}" class="dropdown-item">Business Merchants Solution</a>
                                </div>
                            </div>
                            <a href="{{url('suppliers')}}" class="nav-item nav-link">Suppliers</a>
                            <a href="{{url('partners')}}" class="nav-item nav-link">Partners</a>
                            

                            <a href="{{url('contact-us')}}" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Get Started</a>
                    </div>
                </nav>
            </div>
        </div>