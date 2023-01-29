<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon">
        <i class="fa-solid fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ (Request::is('admin') || Request::is('admin/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('admin') }}">
        <i class="fa-solid fa-gauge"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item {{ (Request::is('book') || Request::is('book/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('book') }}">
        <i class="fa-solid fa-book"></i>
        <span>Buku</span>
    </a>
</li>

<li class="nav-item {{ (Request::is('booking') || Request::is('booking/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('booking') }}">
        <i class="fa-solid fa-receipt"></i>
        <span>Booking</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ (Request::is('catalog') || Request::is('catalog/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('catalog') }}">
        <i class="fa-solid fa-table-list"></i>
        <span>Daftar Katalog</span>
    </a>
</li>

<li class="nav-item {{ (Request::is('kelas') || Request::is('kelas/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('kelas') }}">
    <i class="fa-solid fa-school"></i>
        <span>Daftar Kelas</span>
    </a>
</li>

<li class="nav-item {{ (Request::is('user') || Request::is('user/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('user') }}">
        <i class="fa-solid fa-user"></i>
        <span>User</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->