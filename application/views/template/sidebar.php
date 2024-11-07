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
        <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Olah Data</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- query dari menu-->

    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`,`menu`
                FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
    ";

    $menuku = $this->db->query($queryMenu)->result_array();

    ?>


    <!-- looping menu  -->
    <?php foreach ($menuku as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- siapkan sub menu sesuai menu -->
        <?php
            $menuid = $m['id'];
            $querysubMenu = "SELECT *
        FROM `user_sub_menu` JOIN `user_menu`
        ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        WHERE `user_sub_menu`.`menu_id` = $menuid
        and `user_sub_menu`.`is_active` = 1
        ";
            $submenu = $this->db->query($querysubMenu)->result_array();
            ?>

        <?php foreach ($submenu as $sm) : ?>
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>

                <a class="nav-link" href="<?= base_url($sm['url']) ?>">
                    <i class="<?= $sm['icon'] ?>"></i>
                    <span><?= $sm['title'] ?></span></a>
                </li>
            <?php endforeach ?>
            <hr class="sidebar-divider">

        <?php endforeach; ?>
        <!-- Divider -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('user/changepassword') ?>">
                <i class="fas fa-fw fa-key"></i>
                <span>Ganti Password</span></a>
        </li>
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Logout</span></a>
        </li>


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->