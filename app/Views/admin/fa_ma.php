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
                    <th>X</th>
                    <th>XI</th>
                    <th>XII</th>
                    <th>Total</th>
                    <th>Rombel*</th>
                    <th>Guru/ Tu*</th>
                    <th>File F1</th>
                    <th>Tahun</th>
                    <th>Ket</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['nis'].'-'.$value['sekolah'] ?></td>
                    <td><?= $value['kota'] ?></td>
                    <td><?= $value['xl']+$value['xp']; ?></td>
                    <td><?= $value['xil']+$value['xip']; ?></td>
                    <td><?= $value['xiil']+$value['xiip']; ?></td>
                    <td><?= $value['jumlah'] ?></td>
                    <td><?= $value['xr']+$value['xir']+$value['xiir'] ?></td>
                    <td><?= $value['guru'] ?></td>
                    <td><a href="<?= base_url().'/public/form1/'.$value['tb_form1.file'] ?>"></td>
                    <td>Tahun - Triwulan 1</td>
                    <td><?php if ($value['valid']==1) { echo '<a href="#" class="btn btn-info">Validasi</a>';
                        } elseif ($value['valid']==2) { echo '<label>Terverifikasi</label>'; } ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
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