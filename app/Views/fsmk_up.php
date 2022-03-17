<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f1/save_up') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <?php if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                      <?php echo session()->getFlashdata('success'); ?>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                      <?php foreach ($proses as $value) { ?>
                      <div class="form-group">
                          <label>Nama Sekolah</label>
                          <input class="form-control" type="text" name="nis" value="<?= $value->sekolah ?>" readonly ="">
                      </div>
                      <div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" name="nama_kep" value="<?= $value->kepsek ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" name="nama_ben" class="form-control" value="<?= $value->bendahara ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?= $value->tahun ?>" readonly>
                          </div>
                          <div class="col-6">
                            <label>Triwulan</label>
                            <input type="text" name="tw" class="form-control" value="<?= $value->tw ?>" readonly>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12"><label>Jumlah Siswa dan Rombel</label></div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas X Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->a ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->b ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r1 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XI Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->c ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->d ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r2 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XII Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->e ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->f ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r3 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <div class="row">
                          <div class="col-8"><label>Jumlah Siswa Teknik</label></div>
                          <div class="col-4"><label>Jumlah Rombel</label></div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-8">
                            <input class="form-control" name="teknik" value="<?= $teknik ?>" readonly="">
                          </div>
                          <div class="col-4">
                            <input class="form-control" name="tempat" value="<?= $rt ?>" readonly="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas X Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->g ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->h ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r4 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XI Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->i ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->j ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r5 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XII Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->k ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->l ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->r6 ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          <div class="row">
                          <div class="col-8"><label>Jumlah Siswa Non Teknik</label></div>
                          <div class="col-4"><label>Jumlah Rombel</label></div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-8">
                            <input class="form-control" name="non_teknik" value="<?= $non_teknik ?>" readonly="">
                          </div>
                          <div class="col-4">
                            <input class="form-control" name="tempat" value="<?= $rnt ?>" readonly="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label>Jumlah Guru dan TU :</label>
                      <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-6"><label>Jenis Kelamin :</label></div>
                        <div class="col-md-6"><label>Jenis Pendidikan :</label></div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-3">
                              <label>Laki-Laki</label>
                              <input class="form-control" name="guru_l" value="<?= $value->m ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Perempuan</label>
                              <input class="form-control" name="guru_p" value="<?= $value->n ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>SMA/D3</label>
                              <input class="form-control" name="guru_l" value="<?= $value->o ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S1</label>
                              <input class="form-control" name="guru_p" value="<?= $value->p ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S2</label>
                              <input class="form-control" name="guru_p" value="<?= $value->q ?>" readonly="">
                            </div>
                          </div>                         
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-6"><label>Status PNS/Non PNS :</label></div>
                        <div class="col-md-6"><label>Khusus SMK :</label></div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-3">
                              <label>PNS</label>
                              <input class="form-control" name="guru_l" value="<?= $value->r ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Non PNS</label>
                              <input class="form-control" name="guru_p" value="<?= $value->s ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Produktif</label>
                              <input class="form-control" name="guru_l" value="<?= $value->t ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Normatif</label>
                              <input class="form-control" name="guru_p" value="<?= $value->u ?>" readonly="">
                            </div>
                          </div>                         
                        </div>
                        <div class="form-group">
                        <div class="col-md-12">
                          <label>Jumlah Seluruh Guru <?= $value->sekolah ?></label>
                        <div class="row">
                          <div class="col-12">
                            <input class="form-control" name="guru" value="<?= $guru ?>" readonly="">
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    <!-- Class Upload -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-print"></i> Cetak dan Upload Formulir I</h3>
                        </div>
                        <div class="card-body">
                          <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-3">
                            <label>Pastikan Semua data terisi dengan benar sebelum mencetak</label>
                            <a href="<?= base_url('f1/Formulir1') ?>" target="_blank" class="btn btn-info">Cetak Formulir I</a>
                            </div>
                            <div class="col-md-2">
                            <label>Perbarui Data Formulir 1</label>
                            <a href="<?= base_url('f1/edit_smk/'.$value->id) ?>" class="btn btn-warning">Perbarui Data</a>
                            </div>
                            <div class="col-md-5">
                            <label>Pastikan Semua data terisi dengan benar sebelum mengupload file</label>
                            <div class="custom-file">
                            <input type="file" name="file_upload" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Masukan File Formulir I</label>
                            </div>
                            </div>
                            <div class="col-md-2">
                            <br><br>
                            <button type="submit" class="btn btn-primary" style="margin-top: 9px;"> Process Data</button>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                    <!-- End Class -->
                  </div>
              </form>
          </div>
          </div> 
</div>
</div>
</div>
</section>
</div>