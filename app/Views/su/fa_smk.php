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
                    <th style="font-size: 15px;">#</th>
                    <th style="font-size: 15px;">Sekolah<small>*</small></th>
                    <th style="font-size: 15px;">Kab/ Kota<small>*</small></th>
                    <th style="font-size: 15px;">Total Teknik<small>*</small></th>
                    <th style="font-size: 15px;">Total Non Teknik<small>*</small></th>
                    <th style="font-size: 15px;">Rombel Teknik<small>*</small></th>
                    <th style="font-size: 15px;">Rom Non Teknik<small>*</small></th>
                    <th style="font-size: 15px;">Guru/ Tu</th>
                    <th style="font-size: 15px;">File F1</th>
                    <th style="font-size: 15px;">Ket</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1;foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['sekolah'] ?></td>
                    <td><?= $value['kota'] ?></td>
                    <td><?= $value['teknik'] ?></td>
                    <td><?= $value['non_teknik']; ?></td>
                    <td><?= $value['xtr']+$value['xitr']+$value['xiitr']; ?></td>
                    <td><?= $value['xnr']+$value['xinr']+$value['xiinr'];?></td>
                    <td><?= $value['guru']; ?></td>
                    <td><a href="<?= base_url().'/public/form1/'.$value['file'];?>" target="_blank" class="btn btn-warning">Cek File</a></td>
                    <td><?php if ($value['valid']==1) { echo '<a href="#" class="btn btn-info">Validasi</a>';
                        } elseif ($value['valid']==2) { echo '<label>Terverifikasi</label>'; } ?>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <div class="col-md-6">
                <div class="form-group">
                  <label>Keterangan</label>
                  <div class="row">
                    <div class="col-6">
                      <p>*Sekolah = Nama Sekolah</p>
                    </div>
                    <div class="col-6">
                      <p>*Kab/Kota = Kabupaten Kota</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <p>*Total Teknik = Jumlah Siswa Teknik (X + XI + XII)</p>
                    </div>
                    <div class="col-6">
                      <p>*Total Non Teknik = Jumlah Siswa Teknik (X + XI + XII)</p>
                    </div>
                  </div>
                </div>
                </div>
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