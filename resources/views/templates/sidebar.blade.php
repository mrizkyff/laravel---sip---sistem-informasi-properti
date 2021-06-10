<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIP - Properti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Febrian - Owner</a>
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
          <li class="nav-item">
            <a href="admin/index" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">Baru</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/customers" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Konsumen
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/kepemilikan" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Kepemilikan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/assets" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Asset
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin/blok" class="nav-link">
              <i class="nav-icon fas fa-map-marked-alt"></i>
              <p>
                Blok Kavling
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Keuangan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/pemasukan" class="nav-link">
                  <i class="fas fa-wallet nav-icon"></i>
                  <p>Daftar Pemasukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/pengeluaran" class="nav-link">
                  <i class="fas fa-comment-dollar nav-icon"></i>
                  <p>Daftar Pengeluaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/pembayaran" class="nav-link">
                  <i class="fas fa-money-bill-wave nav-icon"></i>
                  <p>Pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="login/logout" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>