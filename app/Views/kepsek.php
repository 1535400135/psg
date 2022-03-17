<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="<?= base_url('headmaster/save') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- checkbox -->
                    	<div class="form-group">
                        	<label>Masukan Nomor Induk Kepala Sekolah</label>
                        	<input class="form-control" type="number" name="nik" placeholder="Masukan Nomor Induk Kepala Sekolah" required>
                    	</div>
                    	<div class="form-group">
                    		<label>Masukan Nama Lengkap Beserta Gelar</label>
                    		<input class="form-control" type="text" name="namakep" placeholder="Masukan Nama Lengkap Beserta Gelar" required>
                    	</div>
                      <div class="form-group">
                        <label>Masukan Alamat</label>
                        <textarea class="form-control" rows="3" placeholder="Masukan Alamat" name="alamat" required=""></textarea>
                      </div>
                      <div class="form-group">
                    		<label>Masukan Tempat/Tanggal Lahir</label>
                        <div class="row">
                        <div class="col-6">
                        <input class="form-control" name="tmp" placeholder="Masukan Tempat Lahir" required="">
                        </div>
                        <div class="col-6">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tgl" class="form-control datetimepicker-input" data-target="#reservationdate" required />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label>Pilih Jenis Kelamin</label>
                        <select name="jk" class="form-control select2" style="width: 100%;" required>
                            <option value="Laki-Laki" selected="selected">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>
                  	</div>
                  	<div class="col-md-6">
                      <div class="form-group">
                        <label>Pilih Agama</label>
                        <select name="agama" class="form-control select2" style="width: 100%;" required>
                            <option value="Islam" selected="selected">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                          </select>
                      </div>
                  		<div class="form-group">
                  			<label>Masukan No HP</label>
                  				<input type="number" name="nohp" class="form-control" placeholder="Masukan Nomor HP Kepala Sekolah" required>
                  		</div>
                  		<div class="form-group">
                  			<label>Masukan Email</label>
                  				<input type="email" name="email" class="form-control" placeholder="Masukan Email Kepala Sekolah" required>
                  		</div>
                  		<div class="form-group">
                  			<label>Masukan No SK Pengangkatan</label>
                  				<input type="text" name="no_sk" class="form-control" placeholder="Masukan No SK Pengangkatan" required>
                  		</div>
                      <div class="form-group">
                       <label>Masukan Tanggal SK</label>
                        <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="tgl_sk" class="form-control datetimepicker-input" data-target="#reservationdate2" required />
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                      </div>
                      <div class="form-group">
                        <label>Masukan File SK</label>
                        <div class="custom-file">
                          <input type="file" name="file_upload" class="custom-file-input" id="customFile" accept=".pdf" required>
                          <label class="custom-file-label" for="customFile">Masukan File SK</label>
                        </div>
                      </div>
                  	</div>
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-11"></div>
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