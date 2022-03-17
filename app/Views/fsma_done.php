<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
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
                    </div>
                  	<div class="col-md-12"><label>Jumlah Siswa dan Rombel</label></div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Siswa Kelas X</label>
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
                        <label>Siswa Kelas XI</label>
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
                        <label>Siswa Kelas XII</label>
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
                      <div class="form-group">
                        <div class="col-md-12">
                          <div class="row">
                          <div class="col-8"><label>Jumlah Siswa</label></div>
                          <div class="col-4"><label>Jumlah Rombel</label></div>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-8">
                            <input class="form-control" name="jumlah" value="<?= $siswa ?>" readonly="">
                          </div>
                          <div class="col-4">
                            <input class="form-control" name="rombel" value="<?= $rombel ?>" readonly="">
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
                    <?php } ?>
                    <!-- Class Upload -->
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-print"></i> Cetak dan Upload Formulir I</h3>
                        </div>
                        <div class="card-body">
                          <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-5">
                            <label>Pastikan Semua data terisi dengan benar sebelum mencetak</label>
                            <a href="<?= base_url('f1/Formulir1') ?>" target="_blank" class="btn btn-info">Cetak Formulir I</a>
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
                    <!-- End Class -->
                  </div>
          </div>
          </div> 
</div>
</div>
</div>
</section>
</div>