<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('user'); ?>">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> -->
        <img src="<?php echo base_url(); ?>assets/img/logo-perjadin-wh.png" height="30px">
        <!-- <div class="sidebar-brand-text mx-3">PERJADIN<sup><i class="fab fa-telegram-plane"></i></sup></div> -->
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('user'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Olah Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-plane"></i>
            <span>Surat Tugas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kustomisasi</h6>
                <a class="collapse-item" href="<?php echo site_url('tb_st/index'); ?>"><i class="fa fa-list-ul"></i> Daftar</a>
                <a class="collapse-item" href="<?php echo site_url('tb_st/add'); ?>"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Utilities Collapse Menu -->
    <div class="sidebar-heading">
        Data Primer
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Pegawai</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kustomisasi</h6>
                <a class="collapse-item" href="<?php echo site_url('tb_pegawai/index'); ?>"><i class="fa fa-list-ul"></i> Daftar</a>
                <a class="collapse-item" href="<?php echo site_url('tb_pegawai/add'); ?>"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseone">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Instansi</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kustomisasi</h6>
                <a class="collapse-item" href="<?php echo site_url('tb_instansi/index'); ?>"><i class="fa fa-list-ul"></i> Daftar</a>
                <a class="collapse-item" href="<?php echo site_url('tb_instansi/add'); ?>"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetree" aria-expanded="true" aria-controls="collapsetree">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Data Pj Berwenang</span>
        </a>
        <div id="collapsetree" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kustomisasi</h6>
                <a class="collapse-item" href="<?php echo site_url('tb_ttd/index'); ?>"><i class="fa fa-list-ul"></i> Daftar</a>
                <a class="collapse-item" href="<?php echo site_url('tb_ttd/add'); ?>"><i class="fa fa-plus"></i> Tambah</a>
            </div>
        </div>
    </li>
   <!--  <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefour" aria-expanded="true" aria-controls="collapsefour">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Rekap SPPD</span>
        </a>
        <div id="collapsefour" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kustomisasi</h6>
                <a class="collapse-item" href="<?php echo site_url('Tb_st/rekap'); ?>"><i class="fa fa-list-ul"></i> Daftar</a>

            </div>
        </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->