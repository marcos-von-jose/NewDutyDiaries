<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-20">
    <i class="fas fa-solid fa-book"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Duty Diaries</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">

    <a class="nav-link" href="/admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
                <a class="nav-link" href="{{ route('diaries.index') }}">
                <i class="fas fa-solid fa-address-book"></i>
                    <span>Diaries</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('documentations.index')}}">
                <i class="fas fa-solid fa-folder-open"></i>
                    <span>Documentations</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('approval_request.index')}}">
                <i class="fas fa-solid fa-thumbs-up"></i>
                    <span>Apprval Request</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                <i class="fas fa-solid fa-users"></i>
                    <span>Users</span></a>
            </li>
</ul>
<!-- End of Sidebar -->
