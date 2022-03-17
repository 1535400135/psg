<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f1/update') ?>" method="post" enctype="multipart/form-data">
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
                        <input class="form-control" name="il" value="<?= $value->il ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ip" value="<?= $value->ip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ir" value="<?= $value->ir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="iil" value="<?= $value->iil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="iip" value="<?= $value->iip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="iir" value="<?= $value->iir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="iiil" value="<?= $value->iiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="iiip" value="<?= $value->iiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="iiir" value="<?= $value->iiir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas IV SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="ivl" value="<?= $value->ivl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ivp" value="<?= $value->ivp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ivr" value="<?= $value->ivr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas V SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="vl" value="<?= $value->vl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="vp" value="<?= $value->vp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="vr" value="<?= $value->vr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas VI SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="vil" value="<?= $value->vil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="vip" value="<?= $value->vip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="vir" value="<?= $value->vir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                  	</div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas I SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="viil" value="<?= $value->viil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="viip" value="<?= $value->viip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="viir" value="<?= $value->viir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="viiil" value="<?= $value->viiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="viiip" value="<?= $value->viiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="viiir" value="<?= $value->viiir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="ixl" value="<?= $value->ixl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ixp" value="<?= $value->ixp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="ixr" value="<?= $value->ixr ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas I SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xl" value="<?= $value->xl ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xp" value="<?= $value->xp ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xr" value="<?= $value->xr ?>" readonly="">
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xil" value="<?= $value->xil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xip" value="<?= $value->xip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xir" value="<?= $value->xir ?>" readonly="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xiil" value="<?= $value->xiil ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiip" value="<?= $value->xiip ?>" readonly="">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiir" value="<?= $value->xiir ?>" readonly="">
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
                              <input class="form-control" name="gl" value="<?= $value->gl ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Perempuan</label>
                              <input class="form-control" name="gp" value="<?= $value->gp ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>SMA/D3</label>
                              <input class="form-control" name="sma_d3" value="<?= $value->sma_d3 ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S1</label>
                              <input class="form-control" name="s1" value="<?= $value->s1 ?>" readonly="">
                            </div>
                            <div class="col-2">
                              <label>S2</label>
                              <input class="form-control" name="s2" value="<?= $value->s2 ?>" readonly="">
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
                              <input class="form-control" name="pns" value="<?= $value->pns ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Non PNS</label>
                              <input class="form-control" name="non_pns" value="<?= $value->non_pns ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Produktif</label>
                              <input class="form-control" name="gpd" value="<?= $value->gpd ?>" readonly="">
                            </div>
                            <div class="col-3">
                              <label>Guru Normatif</label>
                              <input class="form-control" name="gn" value="<?= $value->gn ?>" readonly="">
                            </div>
                          </div>                         
                        </div>
                        <div class="form-group">
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