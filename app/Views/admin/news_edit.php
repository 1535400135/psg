<section class="content">
    <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="card">
                    <div class="card-body">
                        <?php echo form_open_multipart('admin/berita/update/'.$data->id); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                                        <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                                        <?php echo session()->getFlashdata('success'); ?>
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty(session()->getFlashdata('success'))) { ?>
                                        <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Perhatian!</h5>
                                        <?php echo session()->getFlashdata('success'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label >Judul</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukan Judul" value="<?= $data->nama ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Isi Berita</label>
                                        <div class="mb-3">
                                            <textarea name="isi" class="textarea" placeholder="Place some text here"
                                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $data->isi ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status (Penting/Pengumuman/Berita)</label>
                                        <select class="form-control" name="status" required>
                                            <option value="">Silakan Pilih Label</option>
                                            <option value="Penting" <?php if($data->status=='Penting') { echo "selected"; } ?>>Penting</option>
                                            <option value="Pengumuman" <?php if($data->status=='Pengumuman') { echo "selected"; } ?>>Pengumuman</option>
                                            <option value="Berita" <?php if($data->status=='Berita') { echo "selected"; } ?>>Berita</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Masukan File</label>
                                        <div class="custom-file">
                                            <input type="file" name="file_upload" class="custom-file-input" id="customFile" accept=".pdf" value="<?= $data->file ?>">
                                            <label class="custom-file-label" for="customFile"><?= $data->file ?></label>
                                        </div>
                                    </div>
                                    <div class="card-footer justify-content-between">
                                        <a href="<?= base_url('admin/berita') ?>" class="btn btn-warning">Batal</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
