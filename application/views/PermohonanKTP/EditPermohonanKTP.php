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

                <form id="myForm" action="<?php echo base_url('update_permohonanktp'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Edit Formulir Permohonan KTP</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*ID Permohonan KTP</label>
                                    <input type="text" name="id_permohonan" class="form-control" value="<?php echo set_value('id_permohonan', $id_permohonan); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Permohonan KTP</label>
                                    <select name="permohonan" class="form-control custom-select" required>
                                        <option value="">Pilih Permohonan KTP</option>
                                        <option value="Baru" <?php echo set_select('permohonan', 'Baru', ($permohonan == 'Baru') ? true : false); ?>>Baru</option>
                                        <option value="Perpanjangan" <?php echo set_select('permohonan', 'Perpanjangan', ($permohonan == 'Perpanjangan') ? true : false); ?>>Perpanjangan</option>
                                        <option value="Penggantian" <?php echo set_select('permohonan', 'Penggantian', ($permohonan == 'Penggantian') ? true : false); ?>>Penggantian</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" autocomplete="off" value="<?php echo set_value('nama', $nama); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik', $nik); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo set_value('no_kk', $no_kk); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" autocomplete="off" value="<?php echo set_value('alamat', $alamat); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">*RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" autocomplete="off" value="<?php echo set_value('rt', $rt); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">*RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW" autocomplete="off" value="<?php echo set_value('rw', $rw); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kode Pos</label>
                                    <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos" autocomplete="off" value="<?php echo set_value('kode_pos', $kode_pos); ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kelurahan</label>
                                    <input type="text" name="kelurahan" class="form-control" placeholder="Masukkan Kelurahan" autocomplete="off" value="<?php echo set_value('kelurahan', $kelurahan); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" autocomplete="off" value="<?php echo set_value('kecamatan', $kecamatan); ?>" readonly>
                                </div>
                            </div>

                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kabupaten/Kota</label>
                                    <input type="text" name="kab_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" autocomplete="off" value="<?php echo set_value('kab_kota', $kab_kota); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" placeholder="Masukkan Provinsi" autocomplete="off" value="<?php echo set_value('provinsi', $provinsi); ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Pemohon</label>
                                    <input type="text" name="nama_pemohon" class="form-control" placeholder="Masukkan Nama Pemohon" autocomplete="off" value="<?php echo set_value('nama_pemohon', $nama_pemohon); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Kepala Desa</label>
                                    <input type="text" name="kepala_desa" class="form-control" placeholder="Masukkan Nama Kepala Desa" autocomplete="off" value="<?php echo set_value('kepala_desa', $kepala_desa); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <a href="<?= base_url('view_permohonanktp') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('myForm').onsubmit = function(e) {
        var form = this;
        var hasError = <?php echo validation_errors() ? 'true' : 'false'; ?>;

        if (!hasError) {
            form.target = '_blank';
        } else {
            form.target = '_self'; // Keep it on the same page
        }
    };
</script>