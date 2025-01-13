<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services Edit</title>
    @include('admins.head')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            @include('admins.sidebar')
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admins.navbar')
            <!-- Navbar End -->

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Service Edit Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-10">
                        <h1>Edit Service</h1>
                        <form action="{{ url('services_update/' . $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          

                            <div class="mb-3">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" name="title" value="{{ $service->title }}" class="form-control" id="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                @if($service->icon)
                                    <div class="mb-2">
                                        <img src="{{ asset('images/icons/' . $service->icon) }}" alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                @endif
                                <input type="file" name="icon" class="form-control" id="icon">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                @if($service->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('images/servicesimages/' . $service->image) }}" alt="Service Image" style="width: 100px; height: 100px;">
                                    </div>
                                @endif
                                <input type="file" name="image" class="form-control" id="image">
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="4" required>{{ $service->description }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admins.script')
</body>

</html>
