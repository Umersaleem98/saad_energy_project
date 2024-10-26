<nav class="navbar bg-light navbar-light">
    <a href="{{ url('dashboard') }}" class="navbar-brand mx-4 mb-3">
        <h3 class="text-danger"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
    </a>
    <div class="d-flex align-items-center ms-4 mb-4">
        <div class="position-relative">
            <img class="rounded-circle" src="admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="bg-danger rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
            </div>
        </div>
        <div class="ms-3">
            <h6 class="mb-0">{{ Auth::user()->name }}</h6>
            <span>dashboard</span>
        </div>
    </div>
    <div class="navbar-nav w-100">
        <a href="{{ url('dashboard') }}" class="nav-item nav-link active"><i
                class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="fa fa-laptop me-2"></i>Services</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('services_create') }}" class="dropdown-item">Create Services</a>
                        <a href="{{ url('services_view') }}" class="dropdown-item">Services List</a>
                    </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="fa fa-laptop me-2"></i>Team</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('team_create') }}" class="dropdown-item">Create Team</a>
                        <a href="{{ url('team_list') }}" class="dropdown-item">Team List</a>
                    </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                    class="fa fa-laptop me-2"></i>Elements</a>
            <div class="dropdown-menu bg-transparent border-0">
                <a href="{{ url('message') }}" class="dropdown-item">Message List</a>
                <!-- <a href="typography.html" class="dropdown-item">Typography</a> -->
                <!-- <a href="element.html" class="dropdown-item">Other Elements</a> -->
            </div>
        </div>

    </div>
</nav>
