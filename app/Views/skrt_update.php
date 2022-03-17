<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="<?= base_url('skrt/update') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6">
                      <?php foreach ($info as $value) { ?>
                    	<div class="form-group">
                        	<label>Masukan Nomor Induk Bendahara Sekolah</label>
                        	<input class="form-control" type="text" name="nib" value="<?= $value->nib; ?>" 
                          readonly="">
                    	</div>
                    	<div class="form-group">
                    		<label>Masukan Nama Lengkap Beserta Gelar</label>
                    		<input class="form-control" type="text" name="nama_ben" value="<?= $value->nama_ben ?>" readonly="">
                    	</div>
                      <div class="form-group">
                        <label>Masukan Alamat</label>
                        <textarea class="form-control" rows="3" name="alamat" required=""><?= $value->alamat ?></textarea>
                      </div>
                      <div class="form-group">
                    		<label>Masukan Tempat/Tanggal Lahir</label>
                        <div class="row">
                        <div class="col-6">
                        <input class="form-control" name="tempat" value="<?= $value->tempat ?>" required="">
                        </div>
                        <div class="col-6">
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="tgl" value="<?= $value->tgl ?>" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                        </div>
                      </div>
                      </div>
                      <div class="form-group">
                        <label>Pilih Jenis Kelamin</label>
                        <select name="jk" class="form-control select2" style="width: 100%;">
                            <option value="Laki-Laki" <?php if ($value->jk=='Laki-Laki') { echo "selected";}?> >Laki-Laki</option>
                            <option value="Perempuan" <?php if ($value->jk=='Perempuan') { echo "selected";}?> >Perempuan</option>
                          </select>
                      </div>
                  	</div>
                  	<div class="col-md-6">
                      <div class="form-group">
                        <label>Pilih Agama</label>
                        <select name="agama" class="form-control select2" style="width: 100%;">
                            <option value="Islam" <?php if ($value->agama=='Islam') { echo "selected";}?>>Islam</option>
                            <option value="Kristen" <?php if ($value->agama=='Kristen') { echo "selected";}?>>Kristen</option>
                            <option value="Katolik" <?php if ($value->agama=='Katolik') { echo "selected";}?>>Katolik</option>
                            <option value="Hindu" <?php if ($value->agama=='Hindu') { echo "selected";}?>>Hindu</option>
                            <option value="Budha" <?php if ($value->agama=='Budha') { echo "selected";}?>>Budha</option>
                          </select>
                      </div>
                  		<div class="form-group">
                  			<label>Masukan No HP</label>
                  				<input type="text" name="nohp" class="form-control" value="<?= $value->no_hp ?>" required="">
                  		</div>
                  		<div class="form-group">
                  			<label>Masukan Email</label>
                  				<input type="email" name="email" class="form-control" value="<?= $value->email ?>" required="">
                  		</div>
                  		<div class="form-group">
                  			<label>Masukan No SK Pengangkatan</label>
                  				<input type="text" name="no_sk" class="form-control" value="<?= $value->no_sk ?>" disabled="">
                  		</div>
                      <div class="form-group">
                       <label>Masukan Tanggal SK</label>
                        <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                        <input type="text" name="tgl_sk" value="<?= $value->tgl_sk ?>" class="form-control datetimepicker-input" data-target="#reservationdate2" disabled/>
                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                      </div>
                      <div class="form-group">
                        <label>Masukan File SK</label>
                        <div class="custom-file">
                          <input type="file" name="file_upload" class="custom-file-input" id="customFile" accept=".pdf" disabled="">
                          <label class="custom-file-label" for="customFile"><?= $value->file ?></label>
                        </div>
                      </div>
                  	</div>
                  <?php } ?>
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