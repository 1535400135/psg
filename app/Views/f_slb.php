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
                        	<input class="form-control" type="text" name="nis" id="nis" value="<?= $cekdata->nama_skl ?>" placeholder="Masukan Nomor Induk Bendahara" readonly ="">
                    	</div>
                    	<div class="form-group">
                    		<label>Nama Kepala Sekolah</label>
                    		<input class="form-control" type="text" name="nama_kep" id="nama" value="<?= $cekdata->namakep ?>" placeholder="Masukan Nama Kepala Sekolah" readonly="">
                    	</div>
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" name="nama_ben" class="form-control" value="<?= $cekdata->nama_ben ?>" placeholder="Masukan Nama Bendahara" readonly="">
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
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas I SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="il" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="iil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="iip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="iir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="iiil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="iiip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="iiir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas IV SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="ivl" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ivp" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ivr" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas V SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="vl" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="vp" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="vr" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas VI SD</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="vil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="vip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="vir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                  	</div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas I SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="viil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="viip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="viir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas II SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="viiil" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="viiip" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="viiir" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas III SMP</label>
                        <div class="row">
                        <div class="col-4">
                        <input type="number" class="form-control" name="ixl" placeholder="Laki-Laki" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ixp" placeholder="Perempuan" required="">
                        </div>
                        <div class="col-4">
                        <input type="number" class="form-control" name="ixr" placeholder="Rombel" required="">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas I SMA</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xl" placeholder="Laki-Laki" required="">
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
                        <label>Siswa Kelas II SMA</label>
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
                        <label>Siswa Kelas III SMA</label>
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