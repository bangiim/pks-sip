<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <i class="fas fa-book fa-fw"></i>&nbsp;
    <span class="brand-text font-weight-light">Sistem Perpustakaan</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          {{ Auth::user()->name }}
        </a>
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
      @auth
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/anggota" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Data Anggota</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Katalog Buku
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/buku" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tabel Buku</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/penulis" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tabel Penulis</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/kategori" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tabel Kategori</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="/pinjam" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>Data Peminjaman</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin" class="nav-link">
            <i class="far fa-user nav-icon"></i>
            <p>Data Admin</p>
          </a>
        </li>
      </ul>
      @endauth
    </nav>
  </div>
  <!-- /.sidebar -->
</aside>