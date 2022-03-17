<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f1/save') ?>" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($sekolah as $cekdata) { ?>
                    	<div class="form-group">
                        	<label>Nama Sekolah</label>
                        	<input class="form-control" type="text" name="nama" value="<?= $cekdata->nama_skl ?>" readonly ="">
                    	</div>
                    	<div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" name="nama_kep" value="<?= $cekdata->namakep ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" name="nama_ben" class="form-control" value="<?= $cekdata->nama_ben ?>" readonly="">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Pilih Tahun</label>
                            <select class="form-control" id="tahun" name="tahun">
                              <?php $y = date('Y'); $x=$y-2; for ($i=$y; $i>=$x; $i--) { ?>
                              <option value="<?= $i ?>"><?= $i ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Pilih Triwulan</label>
                            <select class="form-control" id="tw" name="tw">
                              <option value="Triwulan 1">Triwulan 1</option>
                              <option value="Triwulan 2">Triwulan 2</option>
                              <option value="Triwulan 3">Triwulan 3</option>
                              <option value="Triwulan 4">Triwulan 4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  	<div class="col-md-12"><label>Jumlah Siswa dan Rombel</label></div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Siswa Kelas X</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="xl" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xp" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xr" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XI</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="xil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XII</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="xiil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xiip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="xiir" placeholder="Rombel" required="">
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
                              <input type="number" class="form-control" name="gl" placeholder="Laki-Laki" required>
                            </div>
                            <div class="col-3">
                              <label>Perempuan</label>
                              <input type="number" class="form-control" name="gp" placeholder="Perempuan" required>
                            </div>
                            <div class="col-2">
                              <label>SMA/D3</label>
                              <input type="number" class="form-control" name="sma_d3" placeholder="SMA/D3">
                            </div>
                            <div class="col-2">
                              <label>S1</label>
                              <input type="number" class="form-control" name="s1" placeholder="S1">
                            </div>
                            <div class="col-2">
                              <label>S2</label>
                              <input type="number" class="form-control" name="s2" placeholder="S2">
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
                              <input type="number" class="form-control" name="pns" placeholder="PNS">
                            </div>
                            <div class="col-3">
                              <label>Non PNS</label>
                              <input type="number" class="form-control" name="non_pns" placeholder="Non PNS">
                            </div>
                            <div class="col-3">
                              <label>Guru Produktif</label>
                              <input type="number" class="form-control" name="gpd" placeholder="Produktif">
                            </div>
                            <div class="col-3">
                              <label>Guru Normatif</label>
                              <input type="number" class="form-control" name="gn" placeholder="Normatif">
                            </div>
                          </div>                         
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                  </div>
              </form>
          </div>
          </div> 
</div>
</div>
</div>
</section>
</div>