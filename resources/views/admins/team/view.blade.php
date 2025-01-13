<!DOCTYPE html>
<html lang="en">

<head>
    <title>Team List</title>
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

            <!-- Team List Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <h1>Team List</h1>
                </div>
            </div>

            <!-- Table with Scrollable X Axis Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="table-responsive" style="overflow-x: auto;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Image</th>
                                        <th>Facebook</th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                        <th>LinkedIn</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->designation }}</td>

                                            <!-- Display the image -->
                                            <td>
                                                <img src="{{ asset('images/teams/' . $item->image) }}" alt="Team image" width="100" height="150">
                                            </td>

                                            <td>
                                                <a href="{{ $item->facebook }}" target="_blank">Facebook</a>
                                            </td>
                                            <td>
                                                <a href="{{ $item->twitter }}" target="_blank">Twitter</a>
                                            </td>
                                            <td>
                                                <a href="{{ $item->instagram }}" target="_blank">Instagram</a>
                                            </td>
                                            <td>
                                                <a href="{{ $item->linkedin }}" target="_blank">LinkedIn</a>
                                            </td>

                                            <!-- Delete button -->
                                            <td>
                                                <a href="{{ url('teams_edit/' . $item->id) }}" class="btn btn-danger btn-sm">
                                                    Delete
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ url('teams_destroy/' . $item->id) }}" class="btn btn-danger btn-sm">
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
            <!-- Table with Scrollable X Axis End -->

        </div>

        <!-- Back to Top Button -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admins.script')

</body>

</html>
