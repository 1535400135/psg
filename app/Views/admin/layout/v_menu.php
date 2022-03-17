  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!--<img src="<?= base_url() ?>/public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">-->
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
            <a href="<?= base_url() ?>/admin/home" class="nav-link <?php if($menu == 'Dashboard') { echo "active"; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <?php if (session()->get('hak_akses')=='Administrator') { ?>
          <li class="nav-item">
            <a href="<?= base_url() ?>/admin/user" class="nav-link <?php if($menu == 'Pengguna') { echo "active"; }?>" >
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/admin/berita" class="nav-link <?php if($menu == 'New') { echo "active"; }?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Berita / Pengumuman
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if($submenu=='form1') { echo 'active'; }?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Formulir 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form1/sma" class="nav-link <?php if($menu == 'Data SMA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form1/smk" class="nav-link">
                  <i class="far fa-circle nav-icon <?php if($menu == 'Data SMK') { echo "active"; }?>"></i>
                  <p>Data SMK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form1/ma" class="nav-link <?php if($menu == 'Data MA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data MA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form1/slb" class="nav-link <?php if($menu == 'Data SLB') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SLB</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if($submenu=='form2') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Formulir 2
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form2/sma" class="nav-link <?php if($menu == 'FFSMA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form2/smk" class="nav-link <?php if($menu == 'FFSMK') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SMK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form2/ma" class="nav-link <?php if($menu == 'FFMA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data MA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/form2/slb" class="nav-link <?php if($menu == 'FFSLB') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data SLB</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link <?php if($submenu=='sk') { echo 'active'; } ?>">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                SK Dinas Pendidikan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/sk/sma" class="nav-link <?php if($menu == 'SKSMA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/sk/smk" class="nav-link <?php if($menu == 'SKSMK') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/sk/ma" class="nav-link <?php if($menu == 'SKMA') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url() ?>/admin/sk/slb" class="nav-link <?php if($menu == 'SKSLB') { echo "active"; }?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SLB</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/admin/usulan" class="nav-link <?php if($menu == 'Laporan') { echo "active"; }?>">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Cetak Laporan Usulan
              </p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a href="<?= base_url() ?>/admin/lap" class="nav-link <?php if($menu == 'Laporan') { echo "active"; }?>">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Cetak Laporan
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