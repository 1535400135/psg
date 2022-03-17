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
                          <input class="form-control" type="text" name="nis" value="<?= $value->nama_skl ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" name="nama_kep" value="<?= $value->namakep ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" name="nama_ben" class="form-control" value="<?= $value->nama_ben ?>" readonly="">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?= $value->tahun ?>" readonly="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Triwulan</label>
                            <input type="text" name="tw" class="form-control" value="<?= $value->tw ?>" readonly="">
                          </div>
                        </div>
                      </div>
                    </div>
                  	<div class="col-md-12"><label>Jumlah Siswa dan Rombel</label></div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas I SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->il ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->iil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->iip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->iir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->iiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->iiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->iiir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas IV SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->ivl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ivp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ivr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas V SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->vl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->vp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->vr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas VI SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->vil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->vip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->vir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><label>Jumlah Siswa SD</label></div>
                          <div class="col-4"><label>Jumlah Rombel SD</label></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><input class="form-control" name="siswa_sd" value="<?= $siswa_sd ?>" readonly></div>
                          <div class="col-4"><input class="form-control" name="rombel_sd" value="<?= $rombel_sd ?>" readonly></div>
                        </div>
                      </div>
                  	</div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas I SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->viil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->viip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->viir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->viiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->viiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->viiir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->ixl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ixp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->ixr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><label>Jumlah Siswa SMP</label></div>
                          <div class="col-4"><label>Jumlah Rombel SMP</label></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><input class="form-control" name="siswa_smp" value="<?= $siswa_smp ?>" readonly></div>
                          <div class="col-4"><input class="form-control" name="rombel_smp" value="<?= $rombel_smp ?>" readonly></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas I SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->xl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xr ?>" readonly="">
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->xil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="tempat" value="<?= $value->xiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="tanggal" value="<?= $value->xiir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><label>Jumlah Siswa SMA</label></div>
                          <div class="col-4"><label>Jumlah Rombel SMA</label></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-8"><input class="form-control" name="siswa_sma" value="<?= $siswa_sma ?>" readonly></div>
                          <div class="col-4"><input class="form-control" name="rombel_sma" value="<?= $rombel_sma ?>" readonly></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                          <div class="row">
                          <div class="col-8"><label>Jumlah Siswa <?= $value->nama_skl ?></label></div>
                          <div class="col-4"><label>Jumlah Rombel <?= $value->nama_skl ?></label></div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-8">
                            <input class="form-control" name="jumlah_siswa" value="<?= $jumlah_siswa ?>" readonly="">
                          </div>
                          <div class="col-4">
                            <input class="form-control" name="jumlah_rombel" value="<?= $jumlah_rombel ?>" readonly="">
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
                              <input class="form-control" name="guru_l" value="<?= $value->gl ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Perempuan</label>
                              <input class="form-control" name="guru_p" value="<?= $value->gp ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>SMA/D3</label>
                              <input class="form-control" name="guru_l" value="<?= $value->sma_d3 ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S1</label>
                              <input class="form-control" name="guru_p" value="<?= $value->s1 ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S2</label>
                              <input class="form-control" name="guru_p" value="<?= $value->s2 ?>" readonly="">
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
                              <input class="form-control" name="guru_l" value="<?= $value->pns ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Non PNS</label>
                              <input class="form-control" name="guru_p" value="<?= $value->non_pns ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Produktif</label>
                              <input class="form-control" name="guru_l" value="<?= $value->gpd ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Normatif</label>
                              <input class="form-control" name="guru_p" value="<?= $value->gn ?>" readonly="">
                            </div>
                          </div>                         
                        </div>
                        <div class="form-group">
                        <div class="col-md-12">
                          <label>Jumlah Seluruh Guru <?= $value->nama_skl ?></label>
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
                            <a href="<?= base_url('f1/edit_slb/'.$value->id) ?>" target="_blank" class="btn btn-info">Perbarui Data</a>
                            </div>
                            <div class="col-md-5">
                            <label>Pastikan Semua data terisi dengan benar sebelum mengupload file</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
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