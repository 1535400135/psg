<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f2/save_up') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <?php if (!empty(session()->getFlashdata('success'))) { ?>
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                          <?php echo session()->getFlashdata('success'); ?>
                        </div>
                      <?php } ?>
                      <?php foreach ($info as $value) { ?>
                    	<div class="form-group">
                        	<label>Nama Sekolah</label>
                        	<input class="form-control" type="text" name="nis" value="<?= $value['nama_skl'] ?>" readonly ="">
                    	</div>
                    	<div class="form-group">
                    		<label>Kabupaten/Kota</label>
                    		<input class="form-control" type="text" name="nama_kep" value="<?= $value['namakep'] ?>" readonly>
                    	</div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?= $value['tahun'] ?>" readonly="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Triwulan</label>
                            <input type="text" name="tw" class="form-control" value="<?= $value['tw'] ?>" readonly="">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Jumlah Dana yang Diterima</label>
                        <input type="text" name="dana_diterima" class="form-control" value="<?php $rupiah = "Rp. ". 		number_format($value['dana_diterima'], 2, ',', '.');
                        echo $rupiah; ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Diterima Tanggal</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" value="<?= $value['tgl_in'] ?>" class="form-control datetimepicker-input" data-target="#reservationdate" readonly />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
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
                        <?php for ($i=1; $i <26 ; $i++) { ?>
                          <?php foreach ($info as $value) { ?>
                            <?php if (($value['dana'.$i])>0)  { ?>
                          <div class="form-group" >
                          <div class="row">
                            <div class="col-7">
                            <input class="form-control" name="use<?php echo $i; ?>" value="<?= $value['use'.$i] ?>" readonly>
                            </div>
                            <div class="col-5">
                            <input class="form-control" name="dana<?php echo $i; ?>" value="<?php $rupiah = "Rp. ". 		number_format($value['dana'.$i], 2, ',', '.');
                        echo $rupiah; ?>" readonly>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                        <?php } ?>
                        <?php } ?>
                      </div>
                      <div class="col-md-12">
                        <div class="card-body">
                          <label>Total Penggunaan Dana</label>
                          <input name="total" class="form-control" value="<?php $rupiah = "Rp. ". 		number_format($dana, 2, ',', '.');
                        echo $rupiah; ?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-print"></i> Cetak dan Upload Formulir II</h3>
                        </div>
                        <div class="card-body">
                          <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-3">
                            <label>Pastikan Semua data terisi dengan benar sebelum mencetak</label>
                            <a href="<?= base_url('f2/Formulir2') ?>" target="_blank" class="btn btn-info">Cetak Formulir II</a>
                            </div>
                            <div class="col-md-2">
                            <label>Perbarui Data Formulir II</label>
                            <a href="#" target="_blank" class="btn btn-warning">Perbarui Data</a>
                            </div>
                            <div class="col-md-5">
                            <label>Pastikan Semua data terisi dengan benar sebelum mengupload file</label>
                            <div class="custom-file">
                              <input type="file" name="file_upload" class="custom-file-input" id="customFile" accept=".pdf">
                              <label class="custom-file-label" for="customFile">Masukan File Formulir II</label>
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
                  </div>
              </form>
          </div>
          </div> 
</div>
</div>
</div>
</section>
</div>