  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('home') ?>" class="nav-link <?php if ($menu=='Home') {echo 'active'; }?>">Dashboard</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url('penggunaan') ?>" class="nav-link <?php if ($menu == 'HOWTO') { echo 'active'; } ?>">Cara Penggunaan</a>
      </li>
      <li class="nav-item">
        <a href="<?= base_url() ?>/login/logout" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>/public/logo.png" style="opacity: .8; width: 35px; margin-left: 7px;">
      <span class="brand-text font-weight-light" style="font-size: 16px;">Dinas Pendidikan SUMSEL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User - <?= session()->get('hak_akses') ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url('home') ?>" class="nav-link <?php if ($menu=='Home') {echo 'active'; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if ($submenu == 'DATA') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data - Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('sekolah') ?>" class="nav-link <?php if ($menu == 'SKL') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Headmaster') ?>" class="nav-link <?php if ($menu == 'KEPSEK') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Kepala Sekolah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('skrt') ?>" class="nav-link <?php if ($menu == 'SKRT') { echo 'active'; } ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Bendahara Sekolah</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('f1') ?>" class="nav-link <?php if ($menu == 'F1') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Formulir 1
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('f2') ?>" class="nav-link <?php if ($menu == 'F2') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Formulir 2
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/cetak" class="nav-link <?php if ($menu == 'Cetak') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Cetak SK
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