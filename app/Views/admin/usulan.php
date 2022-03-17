    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  <?= $title ?>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST" action="<?= base_url('admin/usulan/reportusulan') ?>">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-4">
                      <label>Silakan Pilih Kabupaten/ Kota</label>
                    </div>
                    <div class="col-2">
                      <label>Jenjang Pendidikan</label>
                    </div>
                    <div class="col-2">
                      <label>Pilih Tahun</label>
                    </div>
                    <div class="col-2">
                      <label>Pilih Triwulan</label>
                    </div>
                    <div class="col-2">
                      <label></label>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-4">
                        <select class="form-control select2" id="kota" name="kota" onchange="ajaxkec(this.value)">
                            <option value="">Silakan Pilih Kabupaten/Kota</option>
                            <?php
                              foreach($kab as $row)
                              { ?>
                               <option value="<?= $row['id_kab']; ?>"> <?= $row['nama']; ?></option>
                               <?php }
                              ?>
                          </select>
                    </div>
                    <div class="col-2">
                      <select class="form-control select2" id="jenis" name="jenis">
                        <option value="SMA">SMA</option>
                        <option value="SMA">SMK</option>
                        <option value="SMA">MA</option>
                        <option value="SMA">SLB</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <select class="form-control select2" id="tahun" name="tahun">
                      <?php foreach ($tahun as $thn) {
                        echo '<option value="'.$thn['tahun'].'">'.$thn['tahun'].'</option>';
                      } ?>
                      <option value="">Tahun</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <select class="form-control select2" id="triwulan" name="triwulan">
                        <?php foreach ($tw as $twn) {
                          echo '<option value="'.$twn['tw'].'">'.$twn['tw'].'</option>';
                        } ?>
                        <option value="">Triwulan</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <button type="submit" class="btn btn-success"><i class="fas fa-print"></i><b> Cetak</b></button>
                    </div>
                  </div>
                </div>
                </form>
                <br>
                <div class="tab-content p-0">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Sekolah</th>
                    <th>Kabupaten/ Kota</th>
                    <th>Kecamatan</th>                    
                    <th>Rekening PSG</th>
                    <th>Jumlah Siswa</th>
                    <th>Nama Kepala Sekolah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($data as $value) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nis.'-'.$value->sekolah ?></td>
                    <td><?= $value->kota ?></td>
                    <td><?= $value->kecamatan ?></td>
                    <td><?= $value->nomor_rek ?></td>
                    <td><?= $value->jumlah ?></td>
                    <td><?= $value->kepsek ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>  
                </div>
              </div><!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->