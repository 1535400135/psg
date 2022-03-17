<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <form role="form" action="<?= base_url('f1/update') ?>" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <?php if (!empty(session()->getFlashdata('success'))) { ?>
                    <div class="alert alert-danger alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                      <?php echo session()->getFlashdata('success'); ?>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                      <?php foreach ($proses as $value) { ?>
                      <div class="form-group">
                          <label>Nama Sekolah</label>
                          <input class="form-control" type="text" name="nis" value="<?= $value->sekolah ?>" readonly ="">
                          <input type="hidden" name="id" id="id" value="<?= $value->id ?>">
                      </div>
                      <div class="form-group">
                        <label>Nama Kepala Sekolah</label>
                        <input class="form-control" type="text" name="nama_kep" value="<?= $value->kepsek ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <label>Nama Bendahara</label>
                        <input type="text" name="nama_ben" class="form-control" value="<?= $value->bendahara ?>" readonly="">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-6">
                            <label>Tahun</label>
                            <input type="text" name="tahun" class="form-control" value="<?= $value->tahun ?>" readonly="">
                          </div>
                          <div class="col-6">
                            <label>Triwulan</label>
                            <input type="text" name="tw" class="form-control" value="<?= $value->tw ?>" readonly="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12"><label>Jumlah Siswa dan Rombel</label></div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas X Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xtl" value="<?= $value->a ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xtp" value="<?= $value->b ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xtr" value="<?= $value->r1 ?>">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XI Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xitl" value="<?= $value->c ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xitp" value="<?= $value->d ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xitr" value="<?= $value->r2 ?>">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XII Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xiitl" value="<?= $value->e ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiitp" value="<?= $value->f ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiitr" value="<?= $value->r3 ?>">
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Siswa Kelas X Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xnl" value="<?= $value->g ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xnp" value="<?= $value->h ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xnr" value="<?= $value->r4 ?>">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XI Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xinl" value="<?= $value->i ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xinp" value="<?= $value->j ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xinr" value="<?= $value->r5 ?>">
                        </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Siswa Kelas XII Non Teknik</label>
                        <div class="row">
                        <div class="col-4">
                        <input class="form-control" name="xiinl" value="<?= $value->k ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiinp" value="<?= $value->l ?>">
                        </div>
                        <div class="col-4">
                        <input class="form-control" name="xiinr" value="<?= $value->r6 ?>">
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
                              <input class="form-control" name="gl" value="<?= $value->m ?>">
                            </div>
                            <div class="col-3">
                              <label>Perempuan</label>
                              <input class="form-control" name="gp" value="<?= $value->n ?>">
                            </div>
                            <div class="col-2">
                              <label>SMA/D3</label>
                              <input class="form-control" name="sma_d3" value="<?= $value->o ?>">
                            </div>
                            <div class="col-2">
                              <label>S1</label>
                              <input class="form-control" name="s1" value="<?= $value->p ?>">
                            </div>
                            <div class="col-2">
                              <label>S2</label>
                              <input class="form-control" name="s2" value="<?= $value->q ?>">
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
                              <input class="form-control" name="pns" value="<?= $value->r ?>">
                            </div>
                            <div class="col-3">
                              <label>Non PNS</label>
                              <input class="form-control" name="non_pns" value="<?= $value->s ?>">
                            </div>
                            <div class="col-3">
                              <label>Guru Produktif</label>
                              <input class="form-control" name="gpd" value="<?= $value->t ?>">
                            </div>
                            <div class="col-3">
                              <label>Guru Normatif</label>
                              <input class="form-control" name="gn" value="<?= $value->u ?>">
                            </div>
                          </div>                         
                        </div>
                      </div>
                    </div>
                    <!-- Class Upload -->
                        <button type="submit" class="btn btn-primary" style="margin-top: 9px; margin-left: 15px;"> Update Data</button>
                  <?php } ?>
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