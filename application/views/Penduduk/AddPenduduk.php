<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Form</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <!-- <?php if (isset($error)) : ?> -->
                    <!-- <div style="color: red;"> -->
                        <!-- <?php echo $error; ?> -->
                    <!-- </div> -->
                <!-- <?php endif; ?> -->
                <!-- End Error Message -->

                <form action="<?php echo base_url('create_penduduk'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Input Data Penduduk</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" value="<?php echo set_value('nama'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No. Urut KK</label>
                                    <input type="text" name="no_urut_kk" class="form-control" placeholder="Masukkan No. Urut KK" autocomplete="off" value="<?php echo set_value('no_urut_kk'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jenis Kelamin</label><br>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="L" <?php echo set_radio('jenkel', 'L'); ?> required>
                                        <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="P" <?php echo set_radio('jenkel', 'P'); ?> required>
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" autocomplete="off" value="<?php echo set_value('tmp_lahir'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" id="mdate" value="<?php echo set_value('tgl_lahir'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Golongan Darah</label>
                                    <select name="gol_darah" class="form-control custom-select" required>
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A" <?php echo set_select('gol_darah', 'A'); ?>>A</option>
                                        <option value="B" <?php echo set_select('gol_darah', 'B'); ?>>B</option>
                                        <option value="AB" <?php echo set_select('gol_darah', 'AB'); ?>>AB</option>
                                        <option value="O" <?php echo set_select('gol_darah', 'O'); ?>>O</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Agama</label>
                                    <select name="agama" class="form-control custom-select" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam" <?php echo set_select('agama', 'Islam'); ?>>Islam</option>
                                        <option value="Katholik" <?php echo set_select('agama', 'Katholik'); ?>>Katholik</option>
                                        <option value="Protestan" <?php echo set_select('agama', 'Protestan'); ?>>Protestan</option>
                                        <option value="Hindu" <?php echo set_select('agama', 'Hindu'); ?>>Hindu</option>
                                        <option value="Buddha" <?php echo set_select('agama', 'Buddha'); ?>>Buddha</option>
                                        <option value="Konghucu" <?php echo set_select('agama', 'Konghucu'); ?>>Konghucu</option>
                                        <option value="Lainnya" <?php echo set_select('agama', 'Lainnya'); ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Status Nikah</label>
                                    <input type="text" name="status_nikah" class="form-control" placeholder="Masukkan Status Nikah" autocomplete="off" value="<?php echo set_value('status_nikah'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Status Keluarga</label>
                                    <input type="text" name="status_keluarga" class="form-control" placeholder="Masukkan Status Keluarga" autocomplete="off" value="<?php echo set_value('status_keluarga'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pendidikan</label>
                                    <select name="pendidikan" class="form-control custom-select">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="PAUD" <?php echo set_select('pendidikan', 'PAUD'); ?>>PAUD</option>
                                        <option value="SD" <?php echo set_select('pendidikan', 'SD'); ?>>SD</option>
                                        <option value="SMP" <?php echo set_select('pendidikan', 'SMP'); ?>>SMP</option>
                                        <option value="SMA" <?php echo set_select('pendidikan', 'SMA') ?>>SMA</option>
                                        <option value="SMK" <?php echo set_select('pendidikan', 'SMK') ?>>SMK</option>
                                        <option value="D3" <?php echo set_select('pendidikan', 'D3') ?>>Diploma 3</option>
                                        <option value="D4" <?php echo set_select('pendidikan', 'D4') ?>>Diploma 4</option>
                                        <option value="S1" <?php echo set_select('pendidikan', 'S1') ?>>Sarjana (S1)</option>
                                        <option value="S2" <?php echo set_select('pendidikan', 'S2') ?>>Magister (S2)</option>
                                        <option value="S3" <?php echo set_select('pendidikan', 'S3') ?>>Doktor (S3)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" autocomplete="off" value="<?php echo set_value('nama_ayah'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" value="<?php echo set_value('nama_ibu'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" autocomplete="off" value="<?php echo set_value('rt'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW" autocomplete="off" value="<?php echo set_value('rw'); ?>" required">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*No. KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo set_value('no_kk'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Warga Negara</label>
                                    <select name="warga_negara" class="form-control custom-select">
                                        <option value="">Pilih Warga Negara</option>
                                        <option value="WNI" <?php echo set_select('warga_negara', 'WNI'); ?>>WNI</option>
                                        <option value="WNA" <?php echo set_select('warga_negara', 'WNA'); ?>>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i> Reset</button>
                        <a href="<?= base_url('view_penduduk') ?>" class="btn btn-inverse">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    $('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
</script>