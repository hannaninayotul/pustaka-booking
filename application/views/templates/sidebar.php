<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Master Data -->
    <div class="sidebar-heading">
        Master Data
    </div>
    <!-- Nav Item - Data Buku -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('admin/index'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Beranda</span>
        </a>
    </li>
    <!-- Nav Item - Data Buku -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Buku</span>
        </a>
    </li>
     <!-- Nav Item - Kategori buku -->
     <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Kategori Buku</span>
        </a>
    </li>
    <!-- Nav Item - Data Anggota -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Data Anggota</span>
        </a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>