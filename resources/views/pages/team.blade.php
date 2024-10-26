<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="text-danger">Team Member</h6>
            <h1 class="mb-4">Experienced Team Members</h1>
        </div>
        <div class="row g-4">
            @foreach ($teams as $item)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="d-flex">
                        <img class="img-fluid w-75" src="{{ asset('images/teams/' . $item->image) }}" alt="">
                        {{-- <img src="{{ asset('images/teams/' . $item->image) }}" alt="Team image" width="100" height="150"> --}}
                                            
                        <div class="team-social w-25">
                            <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-lg-square btn-outline-danger rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5>{{ $item->name }}</h5>
                        <span>{{ $item->designation }}</span>
                    </div>
                </div>
            </div>
            @endforeach
           
        </div>
    </div>
</div>