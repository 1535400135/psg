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
                    <th>Sekolah</th>
                    <th>Kab/ Kota</th>
                    <th>SD</th>
                    <th>SMP</th>
                    <th>SMA</th>
                    <th>Total</th>
                    <th>Total R.</th>
                    <th>Guru/ Tu*</th>
                    <th>File F1</th>
                    <th>Ket</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['sekolah'] ?></td>
                    <td><?= $value['kota'] ?></td>
                    <td><?= $value['il']+$value['ip']+$value['iil']+$value['iip']+$value['iiil']+$value['iiip']+$value['ivl']+$value['ivp']+$value['vl']+$value['vp']+$value['vil']+$value['vip']; ?></td>
                    <td><?= $value['viil']+$value['viip']+$value['viiil']+$value['viiip']+$value['ixl']+$value['ixp']; ?></td>
                    <td><?= $value['xl']+$value['xp']+$value['xil']+$value['xip']+$value['xiil']+$value['xiip'] ?></td>
                    <td><?= $value['jumlah']; ?></td>
                    <td><?= $value['ir']+$value['iir']+$value['iiir']+$value['ivr']+$value['vr']+$value['vir']+$value['viir']+$value['viiir']+$value['ixr']+$value['xr']+$value['xir']+$value['xiir']; ?></td>
                    <td><?= $value['guru'] ?></td>
                    <td><a href="<?= base_url().'/public/form1/'.$value['file'] ?>">Cek File</a></td>
                    <td><?php if ($value['valid']==1) { echo '<a href="#" class="btn btn-info">Validasi</a>';
                        } elseif ($value['valid']==2) { echo '<label>Terverifikasi</label>'; } ?>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Sekolah</th>
                    <th>Kab/ Kota</th>
                    <th>SD</th>
                    <th>SMP</th>
                    <th>SMA</th>
                    <th>Total</th>
                    <th>Total R.</th>
                    <th>Guru/ Tu*</th>
                    <th>File F1</th>
                    <th>Ket</th>
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