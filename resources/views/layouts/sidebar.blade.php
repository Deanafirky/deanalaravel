<ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      {{-- <i class="fas fa-book"></i> --}}
    </div>
    <div class="sidebar-brand-text mx-3">Anathan's Coffee</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0 text-white">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link text-light" href="{{ route('dashboard') }}">
      <i class="fas fa-home"></i>
      <span>Beranda</span>
    </a>
  </li>
  
  <!-- Nav Item - Buku Tamu -->
  <li class="nav-item">
    <a class="nav-link text-light" href="{{ route('products') }}">
      <i class="fas fa-address-book"></i>
      <span>Buku Tamu</span>
    </a>
  </li>
  
  <!-- Nav Item - Data -->
  <li class="nav-item">
    <a class="nav-link text-light" href="/profile">
      <i class="fas fa-database"></i>
      <span>Data</span>
    </a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block text-white">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>

<style>
/* Efek hover pada item menu */
.nav-link:hover {
  background-color: rgba(255, 255, 255, 0.2); /* Warna latar belakang saat hover */
  color: #fff; /* Pastikan warna teks tetap putih saat hover */
}
</style>
