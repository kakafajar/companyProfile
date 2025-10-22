<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" 
     style="width: 250px; height: 100vh; position: fixed;">

    <a href="{{ route('admin.dashboard') }}" 
       class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4 fw-bold">Admin Panel</span>
    </a>
    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.dashboard') ? 'active bg-secondary' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.jobs.index') }}" 
               class="nav-link text-white {{ request()->routeIs('admin.jobs.index') ? 'active bg-secondary' : '' }}">
                <i class="bi bi-briefcase me-2"></i> Manage Jobs
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <i class="bi bi-people me-2"></i> Users
            </a>
        </li>
    </ul>

    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown">
            <i class="bi bi-person-circle me-2"></i>
            <strong>{{ auth()->user()->name ?? 'Admin' }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
