<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="home/img/logo.png" alt="Logo" class="img-fluid" style="max-height: 60px; ">
    </a>
    
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
        <div class="navbar-nav p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ url('about-us') }}" class="nav-item nav-link">About</a>
            <a href="{{ url('our-submit') }}" class="nav-item nav-link">Service</a>
            <a href="{{ url('partners') }}" class="nav-item nav-link">Partners </a>
            <a href="{{ url('suppliers') }}" class="nav-item nav-link">Supplier </a>
            <a href="{{ url('contact-us') }}" class="nav-item nav-link">Contact</a>
        </div>
        
    </div>
    <a href="" class="btn btn-danger rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
</nav>
