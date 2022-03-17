          <div class="col-md-12">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-primary">
                <div class="widget-user-image">
                  <img src="<?= base_url() ?>/public/logo.png"
                  style="width: 85px; height:75px; margin-left: 20px; padding-right: 10px;">
                </div>
                <!-- /.widget-user-image -->
                <?php foreach ($info as $value) { ?>
                <h3 class="widget-user-username">Kepala Sekolah</h3>
                <h5 class="widget-user-desc"><?= $value->nama_skl ?><a href="<?= base_url('headmaster/edit') ?>" class="float-right btn btn-warning">Ubah Data</a></h5>
                <?php } ?>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <?php foreach ($info as $value) { ?>
                    <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                    <b>Nomor Induk Kepala Sekolah</b><i class="float-right" style="margin-right: 50px"><?= $value->nik ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                    <b>Nama Kepala Sekolah</b><i class="float-right" style="margin-right: 50px"><?= $value->namakep ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                    <b>Alamat Lengkap</b><i class="float-right" style="margin-right: 50px"><?= $value->alamat ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Tempat / Tanggal Lahir</b><i class="float-right" style="margin-right: 50px"><?= $value->tmp ?> / <?= $value->tgl ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Jenis Kelamin</b><i class="float-right" style="margin-right: 50px"><?= $value->jk ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Agama</b><i class="float-right" style="margin-right: 50px"><?= $value->agama ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>No Handphone</b><i class="float-right" style="margin-right: 50px"><?= $value->nohp ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Email</b><i class="float-right" style="margin-right: 50px"><?= $value->email ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Nomor SK Pengangkatan</b><i class="float-right" style="margin-right: 50px"><?= $value->no_sk ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Tanggal SK Pengangkatan</b><i class="float-right" style="margin-right: 50px"><?= $value->tgl_sk ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px" href="<?= base_url() .'/sk_kepsek/'.$value->file;?>" target="_blank">
                      <b>File SK Pengangkatan</b><i class="float-right" style="margin-right: 50px"><?= $value->file ?></i>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>