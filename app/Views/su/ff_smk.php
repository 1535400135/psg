    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  <?= $title ?>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Sekolah</th>
                    <th>Kab/ Kota</th>
                    <th>Kepala Sekolah</th>
                    <th>Tgl Dit erima</th>
                    <th>Total Dit erima</th>
                    <th>Total Jumlah Dana</th>
                    <th>Saldo Dana</th>
                    <th>File F2</th>
                    <th>Ketera ngan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nis.'-'.$value->sekolah ?></td>
                    <td><?= $value->kota ?></td>
                    <td><?= $value->kepsek ?></td>
                    <td><?= $value->tgl ?></td>
                    <td><?= $value->dana_diterima ?></td>
                    <td><?= $value->digunakan ?></td>
                    <td><?= $value->saldo ?></td>
                    <td><a href="<?= base_url().'/public/form2/'.$value['file'];?>" target="_blank" class="btn btn-warning">Cek File</a></td>
                    <td><?php if ($value['valid']==1) { echo '<a href="#" class="btn btn-info">Validasi</a>';
                        } elseif ($value['valid']==2) { echo '<label>Terverifikasi</label>'; } ?>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Sekolah</th>
                    <th>Kab/ Kota</th>
                    <th>Kepala Sekolah</th>
                    <th>Tgl Dit erima</th>
                    <th>Total Dit erima</th>
                    <th>Total Jumlah Dana</th>
                    <th>Saldo Dana</th>
                    <th>File F2</th>
                    <th>Ketera ngan</th>
                  </tr>
                  </tfoot>
                </table>  
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->