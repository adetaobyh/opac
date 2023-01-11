<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon">
        <i class="fa-solid fa-book-open"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Opac SMKN 2 Kab. Tangerang</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ (Request::is('siswa') || Request::is('siswa/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('siswa') }}">
        <i class="fa-solid fa-gauge"></i>
        <span>Dashboard</span>
    </a>
</li>

<hr class="sidebar-divider my-0">

<li class="nav-item {{ (Request::is('buku') || Request::is('buku/*') ? 'active open' : '') }}">
    <a class="nav-link" href="{{ route('buku') }}">
        <i class="fa-solid fa-book"></i>
        <span>Buku</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fa-solid fa-receipt"></i>
        <span>Booking</span>
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