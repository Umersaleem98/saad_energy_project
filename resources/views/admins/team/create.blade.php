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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <h1>Add Teams Member </h1>
                </div>
            </div>


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-10">
                        <form action="{{ url('team_store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Name Field -->
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control"  required>
                            </div>
                    
                            <!-- Designation Field -->
                            <div class="form-group mb-3">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control" required>
                            </div>
                    
                            <!-- Image Upload Field -->
                            <div class="form-group mb-3">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
                            </div>
                    
                            <!-- Facebook Field -->
                            <div class="form-group mb-3">
                                <label for="facebook">Facebook URL</label>
                                <input type="url" name="facebook" id="facebook" class="form-control" >
                            </div>
                    
                            <!-- Twitter Field -->
                            <div class="form-group mb-3">
                                <label for="twitter">Twitter URL</label>
                                <input type="url" name="twitter" id="twitter" class="form-control" >
                            </div>
                    
                            <!-- Instagram Field -->
                            <div class="form-group mb-3">
                                <label for="instagram">Instagram URL</label>
                                <input type="url" name="instagram" id="instagram" class="form-control" >
                            </div>
                    
                            <!-- LinkedIn Field -->
                            <div class="form-group mb-3">
                                <label for="linkedin">LinkedIn URL</label>
                                <input type="url" name="linkedin" id="linkedin" class="form-control">
                            </div>
                    
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
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
