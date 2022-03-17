    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          <div class="row">
          <div class="col-md-3">
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid"
                       src="<?= base_url() ?>/public/logo.png"
                       alt="User profile picture">
                </div>
                <?php foreach ($nilai as $k) { ?>
                <h3 class="profile-username text-center"><?= $k->nama_skl ?></h3>
                <p class="text-muted text-center"><?= $k->kab ?></p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NIS</b> <a class="float-right"><?= $k->nis ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>No Telp</b> <a class="float-right"><?= $k->notlp ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $k->email ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?= $k->alamat ?></a>
                  </li>
                </ul>
                <?php } ?>
                <a href="<?= base_url('sekolah') ?>" class="btn btn-primary btn-block"><b>Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-9">
              <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('gagal'); ?>
                </div>
              <?php } elseif (!empty(session()->getFlashdata('valid'))) { ?>
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('valid'); ?>
                </div>
              <?php } elseif (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('success'); ?>
                </div>              
            <?php } elseif (!empty(session()->getFlashdata('info'))) { ?>
                <div class="alert alert-info alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-info"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('info'); ?>
                </div>
              <?php } ?>
              <div class="alert alert-primary">
                <i class="icon fas fa-info"></i>Bagi Kalian Yang belum memahami bagaimana <a href="<?= base_url('penggunaan') ?>">cara Penggunaan PSG Silakan Klik Ini</a>
              </div>
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Pengumuman</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table m-0">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Berita</th>
                      <th>Document</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Start Foreach -->
                    <?php foreach ($berita as $b) { ?>
                    <tr>
                      <td><a href="pages/examples/invoice.html"><?= $b->id ?></a></td>
                      <td><?= $b->nama ?></td>
                      <?php if ($b->status=='Penting') { ?>
                        <td><span class="badge badge-danger"><?= $b->status ?></span></td>
                       <?php } elseif ($b->status=='Berita') { ?>
                        <td><span class="badge badge-success"><?= $b->status ?></span></td>
                       <?php } else { ?>
                        <td><span class="badge badge-warning"><?= $b->status ?></span></td>
                       <?php } ?>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo substr($b->isi, 0,200) ?></div>
                      </td>
                      <td><a href="<?= base_url().'/public/berita/'.$b->file ?>" target="_blank" class="btn btn-tool btn-sm"><?= $b->file ?> <i class="fas fa-download"></i></a></td>
                    </tr>
                    <!-- End Foreach -->
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
             <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->  
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
