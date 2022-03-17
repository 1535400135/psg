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
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Kabupaten</th>
                    <th>Kepala Sekolah</th>
                    <th>Formulir 1</th>
                    <th>Formulir 2</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->sekolah ?></td>
                    <td><?= $value->kota ?></td>
                    <td><?= $value->kepsek ?></td>
                    <td><a href="<?= base_url().'/public/form1/'.$value->file1 ?>" class="btn btn-warning">Cek File Form1</a></td>
                    <td><a href="<?= base_url().'/public/form2/'.$value->file2 ?>" class="btn btn-warning">Cek File Form2</a></td>
                    <td><a href="#" class="btn btn-success">Validasi</a></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Kabupaten</th>
                    <th>Kepala Sekolah</th>
                    <th>Formulir 1</th>
                    <th>Formulir 2</th>
                    <th>Keterangan</th>
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