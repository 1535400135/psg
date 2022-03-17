<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <div class="card-body">
                <form role="form" method="post" action="<?= base_url('f2/save') ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($info as $value) { ?>
                    	<div class="form-group">
                        	<label>Nama Sekolah</label>
                        	<input class="form-control" type="text" name="nis" value="<?= $value->sekolah ?>" readonly ="">
                    	</div>
                    	<div class="form-group">
                    		<label>Nama Kepala Sekolah</label>
                    		<input class="form-control" type="text" name="nama_kep" value="<?= $value->kepsek ?>" readonly="">
                    	</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Tahun</label>
                            <select class="form-control" name="tahun" id="tahun">
                              <?php $y = date('Y'); $x=$y-2; for ($i=$y; $i>=$x; $i--) { ?>
                              <option value="<?= $i ?>"><?= $i ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Triwulan</label>
                            <select class="form-control" name="tw" id="tw">
                              <option value="Triwulan 1">Triwulan 1</option>
                              <option value="Triwulan 2">Triwulan 2</option>
                              <option value="Triwulan 3">Triwulan 3</option>
                              <option value="Triwulan 4">Triwulan 4</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-7">
                            <div class="form-group">
                              <label>Jumlah Dana yang Diterima</label>
                              <input type="number" name="dana_diterima" class="form-control" placeholder="Masukan Jumlah Dana yang Diterima" required>
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                              <label>Diterima Tanggal</label>
                              <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                              <input type="text" name="tgl_in" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  	<div class="col-md-12"><label>Rekapitulasi Penggunaan Dana Program Sekolah Gratis</label></div>
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-7">
                          <label>Penggunaan Dana Ke-1</label>
                        </div>
                        <div class="col-5">
                          <label>Jumlah Dana Ke-1</label>
                        </div>                      
                      </div>
                    </div>
                      <div class="col-md-12">
                      <div class="form-group">
                        <div class="row">
                        <div class="col-7">
                        <input class="form-control" name="form1" placeholder="Judul Penggunaan Dana Ke-1 --  Ex.(Kegiatan Penerimaan Siswa Baru)" required>
                        </div>
                        <div class="col-5">
                          <input class="form-control" name="dana1" id="rupiah1" placeholder="Masukan Jumlah Dana Ke-1" required>
                        </div>
                        </div>
                      </div>
                    </div>
                    <a href="#" class="tambahform" style="padding-left: 10px;"><span class="btn btn-warning"><b>+ Tambah Form</b></span></a>
                    <a href="#" class="hapusform" style="padding-left: 15px;"><span class="btn btn-danger"><b>- Hapus Form</b></span></a>
                    <div class="col-md-12" >
                      <div class="row">
                        <div class="col-11">
                        </div>
                        <div class="col-1">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
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