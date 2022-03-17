    <div class="card-footer clearfix">
      <button type="button" class="btn btn-info float-left" data-toggle="modal" data-target="#modal-lg">
        <i class="fas fa-plus"></i> Tambah User</button>
    </div>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" id="quickForm" method="post" action="<?= base_url('admin/user/save') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nomor Induk Sekolah</label>
                    <input type="number" name="nis" class="form-control" placeholder="Masukan Nomor Induk Sekolah">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <?php if (!empty(session()->getFlashdata('success'))) { ?>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Sukses!</h5>
                  <?php echo session()->getFlashdata('success'); ?>
                </div>
              <?php } ?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  Users
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Induk Sekolah</th>
                    <th>Nama Sekolah</th>
                    <th>Kabupaten/Kota</th>
                    <th>Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $value->nis ?></td>
                    <td><?= $value->sekolah ?></td>
                    <td><?= $value->nama ?></td>
                    <td><?= $value->jenis.'-'.$value->status ?></td>
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