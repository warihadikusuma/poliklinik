  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/AdminLTE/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
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
        <?php if ($role === 'admin'): ?>
            <!-- Menu untuk Admin -->
            <li class="nav-item">
        <a href="#" class="nav-link" id="obat-link">
            <i class="nav-icon fas fa-pills"></i>
            <p>Obat</p>
        </a>
    </li>

        <?php elseif ($role === 'dokter'): ?>
            <!-- Menu untuk Dokter -->
            <li class="nav-item">
                <a href="index.php?page=periksa" class="nav-link">
                    <i class="nav-icon fas fa-notes-medical"></i>
                    <p>Periksa</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=riwayatpasien" class="nav-link">
                    <i class="nav-icon fas fa-history"></i>
                    <p>Riwayat Pasien</p>
                </a>
            </li>
        <?php elseif ($role === 'pasien'): ?>
            <!-- Menu untuk Pasien -->
            <li class="nav-item">
                <a href="index.php?page=dashboard_pasien" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Dashboard Pasien</p>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
  </aside>
