  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 16px;">Dinas Pendidikan SUMSEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url() ?>/su/home" class="nav-link <?php if($menu == 'Dashboard') { echo "active"; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php if($submenu == 'Pengguna') { echo "active"; }?>" >
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>/su/admin" class="nav-link <?php if($menu == 'admin') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna Administrator</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/su/user" class="nav-link">
                  <i class="far fa-circle nav-icon <?php if($menu == 'sekolah') { echo "active"; }?>"></i>
                  <p>Pengguna Sekolah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/su/berita" class="nav-link <?php if($menu == 'New') { echo "active"; }?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Berita / Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/login/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>