<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="<?php echo base_url(); ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info">
            <!-- <a href="<?php echo base_url('admin/manage_Emp/' . $this->session->userdata('user_id')); ?>" class="d-block"><?php echo $this->session->userdata('name'); ?> <span style="color:#007bff;">Edit</span></a> -->
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <!-- <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('dashboard/'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('admin/myProfile'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>My Profile</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('materials'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Materials</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('admin/goToMembers'); ?>" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Members</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('logout'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>