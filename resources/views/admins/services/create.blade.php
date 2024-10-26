<!DOCTYPE html>
<html lang="en">

<head>
    @include('admins.head')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


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
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <h1>Messages list</h1>
                </div>
            </div>


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-10">
                        <form action="{{ url('services_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                    
                            <div class="mb-3">
                                <label for="title" class="form-label">Service Title</label>
                                <input type="text" name="title" class="form-control" id="title" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="icon" class="form-label">icon</label>
                                <input type="file" name="icon" class="form-control" id="icon" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="image" required>
                            </div>
                    
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="4" required></textarea>
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Add Service</button>
                        </form>
                    
                    </div>

                </div>
            </div>

        </div>

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admins.script')

</body>

</html>
