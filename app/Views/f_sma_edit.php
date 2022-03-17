<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f1/update') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <?php if (!empty(session()->getFlashdata('success'))) { ?>
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                        <?php echo session()->getFlashdata('success'); ?>
                      </div>
                      <?php } ?>
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
                      </div>
                    </div>
                    <?php } ?>
                    <!-- Class Upload -->
                    <button type="submit" class="btn btn-primary" style="margin-top: 9px; margin-left: 15px;"> Update Data</button>
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