<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">
                <h4 class="m-b-0 text-white">Form Permohonan KTP</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('create_permohonanktp'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Input Formulir Permohonan KTP</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*ID Permohonan KTP</label>
                                    <input type="text" name="id_permohonan" class="form-control" value="<?php echo $id_permohonan; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Permohonan KTP</label>
                                    <select name="permohonan" class="form-control custom-select" required>
                                        <option value="">Pilih Permohonan KTP</option>
                                        <option value="Baru" <?php echo set_select('permohonan', 'Baru'); ?>>Baru</option>
                                        <option value="Perpanjangan" <?php echo set_select('permohonan', 'Perpanjangan'); ?>>Perpanjangan</option>
                                        <option value="Penggantian" <?php echo set_select('permohonan', 'Penggantian'); ?>>Penggantian</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" autocomplete="off" value="<?php echo set_value('nama'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo set_value('no_kk'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" autocomplete="off" value="<?php echo set_value('alamat'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">*RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" autocomplete="off" value="<?php echo set_value('rt'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">*RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW" autocomplete="off" value="<?php echo set_value('rw'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kode Pos</label>
                                    <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" autocomplete="off" value="<?php echo isset($kode_pos[0]->data_aturan) ? $kode_pos[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kelurahan</label>
                                    <input type="text" name="kelurahan" class="form-control" placeholder="Masukkan Kelurahan" autocomplete="off" value="<?php echo isset($kelurahan[0]->data_aturan) ? $kelurahan[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" autocomplete="off" value="<?php echo isset($kecamatan[0]->data_aturan) ? $kecamatan[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>

                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kabupaten/Kota</label>
                                    <input type="text" name="kab_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" autocomplete="off" value="<?php echo isset($kab_kota[0]->data_aturan) ? $kab_kota[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" placeholder="Masukkan Provinsi" autocomplete="off" value="<?php echo isset($provinsi[0]->data_aturan) ? $provinsi[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Pemohon</label>
                                    <input type="text" name="nama_pemohon" class="form-control" placeholder="Masukkan Nama Pemohon" autocomplete="off" value="<?php echo set_value('nama_pemohon'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Kepala Desa</label>
                                    <input type="text" name="kepala_desa" class="form-control" placeholder="Masukkan Nama Kepala Desa" autocomplete="off" value="<?php echo isset($kepala_desa[0]->data_aturan) ? $kepala_desa[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button>
                        <a href="<?= base_url('view_permohonanktp') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>