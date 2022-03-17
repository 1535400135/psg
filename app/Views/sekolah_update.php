<section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="<?= base_url('sekolah/update'); ?>" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- checkbox -->
                    	<div class="form-group">
                        	<label>Masukan Nomor Induk Sekolah</label>
                        	<input class="form-control" type="text" name="nis" id="nis" disabled value="<?php echo $info->nis;?>">
                    	</div>
                    	<div class="form-group">
                    		<label>Masukan Nama Sekolah</label>
                    		<input class="form-control" type="text" name="nama_skl" id="nama" value="<?php echo $info->nama_skl;?>" disabled>
                    	</div> 
                    	<div class="form-group">
                    		<label>Masukan Alamat Sekolah</label>
                    		<textarea class="form-control" rows="3" name="alamat" disabled><?php echo $info->alamat;?></textarea>
                    	</div>
                      <div class="form-group">
                        <label>Masukan Email Sekolah</label>
                        <input class="form-control" type="text" name="email" value="<?php echo $info->email;?>" required=""></input>
                      </div>
                      <div class="form-group">
                        <label>Masukan No Telp Sekolah</label>
                        <input class="form-control" type="text" name="notlp" value="<?php echo $info->notlp;?>" required></input>
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Nama Bank</label>
                          <select class="form-control select2" name="id_bank" style="width: 100%;">
                            <?php foreach ($bank as $key) { ?>
                              <option value="<?= $key->id; ?>" <?php if ($info->id_bank==$key->id) { echo "selected";}?>> <?= $key->nama; ?></option>
                            <?php } ?>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Masukan Nomor Rekening Bank</label>
                        <input type="text" name="nomor_rek" class="form-control" value="<?php echo $info->nomor_rek;?>" required="">
                      </div>
                  	</div>
                  	<div class="col-md-6">
                      <?php foreach ($data as $data) { ?>
                  		<div class="form-group">
                  			<label>Silakan Pilih Kabupaten/Kota</label>
                  				<select class="form-control select2" id="kota" name="kota" disabled="">
                              <option><?php echo $data->kab;?></option>
			                  	</select>
                  		</div>
                  		<div class="form-group">
                  			<label>Silakan Pilih Kecamatan</label>
                  				<select class="form-control select2" id="kec" name="kec" disabled="">
                            <option value=""><?php echo $data->kec;?></option>
			                  	</select>
                  		</div>
                  		<div class="form-group">
                  			<label>Silakan Pilih Kelurahan/Desa</label>
                  				<select class="form-control select2" id="kel" name="kel" style="width: 100%;" disabled="">
                            <option value=""><?php echo $data->kel;?></option>
			                  	</select>
                  		</div>
                      <?php } ?>
                      <div class="form-group">
                        <label>Masukan Kode POS</label>
                        <input type="text" name="pos" value="<?php echo $info->pos;?>" required="" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Status Sekolah <p style="font-size: 14px;">(Negeri/Swasta)</p></label>
                          <select class="form-control select2" name="status" style="width: 100%;" disabled="">
                            <option <?php if ($info->status=='Negeri') { echo "selected";}?>>Negeri</option>
                            <option <?php if ($info->jenis=='Swasta') { echo "selected";}?>>Swasta</option>
                          </select>
                      </div>
                      <div class="form-group">
                        <label>Silakan Pilih Jenjang Sekolah <p style="font-size: 14px;">(SMA/SMK/MA/SLB)</p></label>
                          <select class="form-control select2" name="jenis" style="width: 100%;" disabled="">
                            <option <?php if ($info->jenis=='SMA') { echo "selected";}?>>SMA</option>
                            <option <?php if ($info->jenis=='SMK') { echo "selected";}?>>SMK</option>
                            <option <?php if ($info->jenis=='MA') { echo "selected";}?>>MA</option>
                            <option <?php if ($info->jenis=='SLB') { echo "selected";}?>>SLB</option>
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