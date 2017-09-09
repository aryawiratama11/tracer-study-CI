<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">UNIVERSITAS AMIKOM YOGYAKARTA</a>

        </div>
        <div class="navbar-header navbar-right">
            <a class="btn btn-danger waves-effect" href="<?php echo base_url('dashboard/admin/logout'); ?>"><b>logout</b></a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="
                <?php 
                if ($profil_p == null) {
                    echo base_url().'photo/noimage.png';
                } else {
                   echo $profil_p; 
               } ?>
               " width="50" height="50" alt="User" />
           </div>
           <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $username ?></div>
            <div class="email"><?php echo $nim; ?></div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?php echo $class1; ?>">
                <a href="<?php echo base_url('dashboard/admin'); ?>">
                    <i class="material-icons">store</i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="<?php echo $class2; ?>">
                <a href="<?php echo base_url('dashboard/admin/dataadmin'); ?>">
                    <i class="material-icons">account_circle</i>
                    <span>Data Admin</span>
                </a>
            </li>
            <li class="<?php echo $class3; ?>">
                <a href="<?php echo base_url('dashboard/admin/dataalumni'); ?>">
                    <i class="material-icons">supervisor_account</i>
                    <span>Data Alumni</span>
                </a>
            </li>
            <li class="<?php echo $class4; ?>">
                <a href="<?php echo base_url('dashboard/admin/dataperusahaan'); ?>">
                    <i class="material-icons">supervisor_account</i>
                    <span>Data Perusahaan</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->

    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

</section>