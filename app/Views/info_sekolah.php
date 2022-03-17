          <div class="col-md-12">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img src="<?= base_url() ?>/public/logo.png"
                  style="width: 85px; height:75px; margin-left: 20px; padding-right: 10px;">
                </div>
                <!-- /.widget-user-image -->
                <?php foreach ($info as $value) { ?>
				  <h3 class="widget-user-username"><?= $value->nama_skl ?></h3>
                <h5 class="widget-user-desc"><?= $value->nis ?><a href="<?= base_url('sekolah/edit') ?>" class="float-right btn btn-info">Ubah Data</a></h5>
                <?php } ?>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <?php foreach ($info as $value) { ?>
                    <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Nomor Induk Sekolah</b><i class="float-right" style="margin-right: 50px"><?= $value->nis ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Nama Sekolah</b><i class="float-right" style="margin-right: 50px"><?= $value->nama_skl ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Alamat Lengkap</b><i class="float-right" style="margin-right: 50px"></i><br>
                      <a style="margin-left: 70px">Kabupaten/Kota</b><i class="float-right" style="margin-right: 50px"><?= $value->kab ?></i><br>
                      <a style="margin-left: 70px">Kecamatan</b><i class="float-right" style="margin-right: 50px"><?= $value->kec ?></i><br>
                      <a style="margin-left: 70px">Kelurahan</b><i class="float-right" style="margin-right: 50px"><?= $value->kel ?></i><br>
                      <a style="margin-left: 70px">Alamat</b><i class="float-right" style="margin-right: 50px"><?= $value->alamat ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Kode POS</b><i class="float-right" style="margin-right: 50px"><?= $value->pos ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Email</b><i class="float-right" style="margin-right: 50px"><?= $value->email ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Nomor Telpon</b><i class="float-right" style="margin-right: 50px"><?= $value->notlp ?></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" style="margin-left: 40px">
                      <b>Status</b><i class="float-right" style="margin-right: 50px"><?= $value->jenis ?> <?= $value->status ?></i>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>