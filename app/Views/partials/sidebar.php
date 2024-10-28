<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= site_url('dashboard'); ?>" class="brand-link">
    <img src="<?php echo site_url('dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">iljeGREEN</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo site_url('dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= site_url('cliente/new') ?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Clientes
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= site_url('cliente') ?>" class="nav-link active">
                <i class="fas nav-icon fa-list"></i>
                <p>Listado de clientes</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('cliente/new') ?>" class="nav-link">
                <i class="fas nav-icon fa-user-plus "></i>
                <p>Agregar clientes</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-pump-soap"></i>
            <p>
              Productos
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="fas nav-icon fa-list"></i>
                <p>Listado de productos</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./index2.html" class="nav-link">
                <i class="fas nav-icon fa-plus "></i>
                <p>Agregar productos</p>
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