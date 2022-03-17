<div class="card-footer clearfix">
      <button type="button" class="btn btn-info float-left" data-toggle="modal" data-target="#modal-xl">
        <i class="fas fa-plus"></i> Tambah Berita/Pengumuman</button>
    </div>
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Berita</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open_multipart('admin/berita/save'); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label >Judul</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Judul">
                  </div>
                  <div class="form-group">
                    <label>Isi Berita</label>
                    <div class="mb-3">
                    <textarea name="isi" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Status (Penting/Pengumuman/Berita)</label>
                        <select class="form-control" name="status" required>
                          <option value="">Silakan Pilih Label</option>
                          <option value="Penting">Penting</option>
                          <option value="Pengumuman">Pengumuman</option>
                          <option value="Berita">Berita</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Masukan File</label>
                        <div class="custom-file">
                          <input type="file" name="file_upload" class="custom-file-input" id="customFile" accept=".pdf">
                          <label class="custom-file-label" for="customFile">Masukan File</label>
                        </div>
                         </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12"><div class="card">
              <div class="card-header border-transparent">
                <h1 class="card-title"><label>Pengumuman / Berita</label></h1>
              </div>
              <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('gagal'); ?>
                  </div>
              <?php } ?>
              <?php if (!empty(session()->getFlashdata('success'))) { ?>
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                  <?php echo session()->getFlashdata('success'); ?>
                  </div>
              <?php } ?>
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
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $value) { ?>
                    <tr>
                      <td><a href="#"><?= $value->id ?></a></td>
                      <td><?= $value->nama ?></td>
                      <td><?php if($value->status=='Berita') {
                        echo '<span class="badge badge-success">'.$value->status.'</span>';
                        } elseif ($value->status=='Pengumuman') {
                          echo '<span class="badge badge-warning">'.$value->status.'</span>';
                        } elseif ($value->status=='Penting') {
                          echo '<span class="badge badge-danger">'.$value->status.'</span>';
                        } ?>
                        </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?= $value->isi ?></div>
                      </td>
                      <td><a href="<?= base_url().'/public/berita/'.$value->file ?>" target="_blank" class="btn btn-tool btn-sm"><?= $value->file ?><i class="fas fa-download"></i></a></td>
                      <td style="text-align: center;"><a href="<?= base_url('admin/berita/edit/'.$value->id) ?>" class="btn btn-info">Edit</a> | <form action="<?= base_url('admin/berita/hapus/'.$value->id) ?>"><input type="submit" class="btn btn-danger" value="Hapus"></form></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <!-- /.content -->
  </div>
