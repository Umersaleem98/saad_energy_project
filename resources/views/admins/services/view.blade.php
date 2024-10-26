<!DOCTYPE html>
<html lang="en">

<head>
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

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <h1>Service list</h1>
                </div>
            </div>

            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>

                                        <!-- Display icon with 100x100 size -->
                                        <td>
                                            <img src="{{ asset('images/icons/' . $item->icon) }}" alt="Icon" width="100" height="50">
                                        </td>

                                        <!-- Display image with 100x100 size -->
                                        <td>
                                            <img src="{{ asset('images/servicesimages/' . $item->image) }}" alt="Service Image" width="100" height="50">
                                        </td>

                                        <td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('services_destroy/' . $item->id) }}" class="btn btn-danger btn-sm">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- Back to Top Button -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admins.script')

</body>

</html>
