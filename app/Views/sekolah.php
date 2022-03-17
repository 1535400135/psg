<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="<?= base_url('sekolah/save'); ?>" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- checkbox -->
                    	<div class="form-group">
                        	<label>Masukan Nomor Induk Sekolah</label>
                        	<input class="form-control" type="number" name="nis" id="nis" readonly="readonly" value="<?php echo $data_nis; ?>">
                    	</div>
                    	<div class="form-group">
                    		<label>Masukan Nama Sekolah</label>
                    		<input class="form-control" type="text" name="nama_skl" id="nama" placeholder="Masukan Nama Sekolah" required>
                    	</div> 
                    	<div class="form-group">
                    		<label>Masukan Alamat Sekolah</label>
                    		<textarea class="form-control" rows="3" name="alamat" placeholder="Masukan Alamat Sekolah" required=""></textarea>
                    	</div>
                      <div class="form-group">
                        <label>Masukan Email Sekolah</label>
                        <input class="form-control" type="email" name="email" placeholder="Masukan Email Sekolah" required=""></input>
                      </div>
                      <div class="form-group">
                        <label>Masukan No Telp Sekolah</label>
                        <input class="form-control" type="number" name="notlp" placeholder="Masukan No Telp Sekolah" required=""></input>
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Nama Bank</label>
                          <select class="form-control select2" name="id_bank" style="width: 100%;">
                            <?php foreach ($bank as $key) { ?>
                              <option value="<?= $key->id; ?>"> <?= $key->nama ?></option>
                            <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Masukan Nomor Rekening Bank</label>
                        <input type="number" name="nomor_rek" class="form-control" placeholder="Masukan Nomor Rekening Bank" required="">
                      </div>
                  	</div>
                  	<div class="col-md-6">
                  		<div class="form-group">
                  			<label>Silakan Pilih Kabupaten/Kota</label>
                  				<select class="form-control select2" id="kota" name="kota" onchange="ajaxkec(this.value)" required>
                            <option value="">Silakan Pilih Kabupaten/Kota</option>
                            <?php
                              foreach($kab as $row)
                              { ?>
                               <option value="<?= $row['id_kab']; ?>"> <?= $row['nama']; ?></option>
                               <?php }
                              ?>
			                  	</select>
                  		</div>
                  		<div class="form-group">
                  			<label>Silakan Pilih Kecamatan</label>
                  				<select class="form-control select2" id="kec" name="kec" onchange="ajaxkel(this.value)" required>
                            <option value="">Silakan Pilih Kabupater/Kota Terlebih Dahulu</option>
			                  	</select>
                  		</div>
                  		<div class="form-group">
                  			<label>Silakan Pilih Kelurahan/Desa</label>
                  				<select class="form-control select2" id="kel" name="kel" style="width: 100%;" required>
                            <option value="">Silakan Pilih Kecamatan Terlebih Dahulu</option>
			                  	</select>
                  		</div>
                      <div class="form-group">
                        <label>Masukan Kode POS</label>
                        <input type="number" name="pos" placeholder="Masukan Kode Pos" required="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Status Sekolah <p style="font-size: 14px;">(Negeri/Swasta)</p></label>
                          <select class="form-control select2" name="status" style="width: 100%;" required>
                            <option selected="selected" value="Negeri">Negeri</option>
                            <option value="Swasta">Swasta</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Jenjang Sekolah <p style="font-size: 14px;">(SMA/SMK/MA/SLB)</p></label>
                          <select class="form-control select2" name="jenis" style="width: 100%;" required>
                            <option selected="selected" value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="MA">MA</option>
                            <option value="SLB">SLB</option>
                          </select>
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