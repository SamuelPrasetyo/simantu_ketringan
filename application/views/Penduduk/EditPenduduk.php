<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Form Data Penduduk</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>
                <!-- End Error Message -->

                <form action="<?php echo base_url('update_penduduk'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Edit Data Penduduk</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik', $nik); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" value="<?php echo set_value('nama', $nama); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No. Urut KK</label>
                                    <input type="text" name="no_urut_kk" class="form-control" placeholder="Masukkan No. Urut KK" autocomplete="off" value="<?php echo set_value('no_urut_kk', $no_urut_kk); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jenis Kelamin</label><br>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="L"
                                            <?php echo set_radio('jenkel', 'L', ($jenkel == 'L') ? true : false); ?> required>
                                        <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="P"
                                            <?php echo set_radio('jenkel', 'P', ($jenkel == 'P') ? true : false); ?> required>
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" autocomplete="off" value="<?php echo set_value('tmp_lahir', $tmp_lahir); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" placeholder="Pilih Tanggal" id="datepicker" value="<?php echo set_value('tgl_lahir', $tgl_lahir); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Golongan Darah</label>
                                    <select name="gol_darah" class="form-control custom-select" required>
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A" <?php echo set_select('gol_darah', 'A', ($gol_darah == 'A') ? true : false); ?>>A</option>
                                        <option value="B" <?php echo set_select('gol_darah', 'B', ($gol_darah == 'B') ? true : false); ?>>B</option>
                                        <option value="AB" <?php echo set_select('gol_darah', 'AB', ($gol_darah == 'AB') ? true : false); ?>>AB</option>
                                        <option value="O" <?php echo set_select('gol_darah', 'O', ($gol_darah == 'O') ? true : false); ?>>O</option>
                                        <option value="TIDAK TAHU" <?php echo set_select('gol_darah', 'TIDAK TAHU', ($gol_darah == 'TIDAK TAHU') ? true : false); ?>>Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Agama</label>
                                    <select name="agama" class="form-control custom-select" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam" <?php echo set_select('agama', 'Islam', ($agama == 'Islam') ? true : false); ?>>Islam</option>
                                        <option value="Katolik" <?php echo set_select('agama', 'Katolik', ($agama == 'Katolik') ? true : false); ?>>Katolik</option>
                                        <option value="Protestan" <?php echo set_select('agama', 'Protestan', ($agama == 'Protestan') ? true : false); ?>>Protestan</option>
                                        <option value="Hindu" <?php echo set_select('agama', 'Hindu', ($agama == 'Hindu') ? true : false); ?>>Hindu</option>
                                        <option value="Buddha" <?php echo set_select('agama', 'Buddha', ($agama == 'Buddha') ? true : false); ?>>Buddha</option>
                                        <option value="Konghucu" <?php echo set_select('agama', 'Konghucu', ($agama == 'Konghucu') ? true : false); ?>>Konghucu</option>
                                        <option value="Lainnya" <?php echo set_select('agama', 'Lainnya', ($agama == 'Lainnya') ? true : false); ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Status Nikah</label>
                                    <select name="status_nikah" class="form-control custom-select" required>
                                        <option value="">Pilih Status Nikah</option>
                                        <option value="Kawin Tercatat" <?php echo set_select('status_nikah', 'Kawin Tercatat', ($status_nikah == 'Kawin Tercatat') ? true : false); ?>>Kawin Tercatat</option>
                                        <option value="Kawin Tidak Tercatat" <?php echo set_select('status_nikah', 'Kawin Tidak Tercatat', ($status_nikah == 'Kawin Tidak Tercatat') ? true : false); ?>>Kawin Tidak Tercatat</option>
                                        <option value="Belum Kawin" <?php echo set_select('status_nikah', 'Belum Kawin', ($status_nikah == 'Belum Kawin') ? true : false); ?>>Belum Kawin</option>
                                        <option value="Cerai Hidup Tercatat" <?php echo set_select('status_nikah', 'Cerai Hidup Tercatat', ($status_nikah == 'Cerai Hidup Tercatat') ? true : false); ?>>Cerai Hidup Tercatat</option>
                                        <option value="Cerai Hidup Tidak Tercatat" <?php echo set_select('status_nikah', 'Cerai Hidup Tidak Tercatat', ($status_nikah == 'Cerai Hidup Tidak Tercatat') ? true : false); ?>>Cerai Hidup Tidak Tercatat</option>
                                        <option value="Cerai Mati" <?php echo set_select('status_nikah', 'Cerai Mati', ($status_nikah == 'Cerai Mati') ? true : false); ?>>Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Status Keluarga</label>
                                    <select name="status_keluarga" class="form-control custom-select" required>
                                        <option value="">Pilih Status Keluarga</option>
                                        <option value="Kepala Keluarga" <?php echo set_select('status_keluarga', 'Kepala Keluarga', ($status_keluarga == 'Kepala Keluarga') ? true : false); ?>>Kepala Keluarga</option>
                                        <option value="Suami" <?php echo set_select('status_keluarga', 'Suami', ($status_keluarga == 'Suami') ? true : false); ?>>Suami</option>
                                        <option value="Istri" <?php echo set_select('status_keluarga', 'Istri', ($status_keluarga == 'Istri') ? true : false); ?>>Istri</option>
                                        <option value="Anak" <?php echo set_select('status_keluarga', 'Anak', ($status_keluarga == 'Anak') ? true : false); ?>>Anak</option>
                                        <option value="Orang Tua" <?php echo set_select('status_keluarga', 'Orang Tua', ($status_keluarga == 'Orang Tua') ? true : false); ?>>Orang Tua</option>
                                        <option value="Famili Lain" <?php echo set_select('status_keluarga', 'Famili Lain', ($status_keluarga == 'Famili Lain') ? true : false); ?>>Famili Lain</option>
                                        <option value="Pembantu" <?php echo set_select('status_keluarga', 'Pembantu', ($status_keluarga == 'Pembantu') ? true : false); ?>>Pembantu</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pendidikan</label>
                                    <select name="pendidikan" class="form-control custom-select">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="TIDAK / BELUM SEKOLAH" <?php echo set_select('pendidikan', 'TIDAK / BELUM SEKOLAH', ($pendidikan == 'TIDAK / BELUM SEKOLAH') ? true : false); ?>>TIDAK / BELUM SEKOLAH</option>
                                        <option value="BELUM TAMAT SD / SEDERAJAT" <?php echo set_select('pendidikan', 'BELUM TAMAT SD / SEDERAJAT', ($pendidikan == 'BELUM TAMAT SD / SEDERAJAT') ? true : false); ?>>BELUM TAMAT SD / SEDERAJAT</option>
                                        <option value="TAMAT SD / SEDERAJAT" <?php echo set_select('pendidikan', 'TAMAT SD / SEDERAJAT', ($pendidikan == 'TAMAT SD / SEDERAJAT') ? true : false); ?>>TAMAT SD / SEDERAJAT</option>
                                        <option value="SLTP / SEDERAJAT" <?php echo set_select('pendidikan', 'SLTP / SEDERAJAT', ($pendidikan == 'SLTP / SEDERAJAT') ? true : false); ?>>SLTP / SEDERAJAT</option>
                                        <option value="SLTA / SEDERAJAT" <?php echo set_select('pendidikan', 'SLTA / SEDERAJAT', ($pendidikan == 'SLTA / SEDERAJAT') ? true : false); ?>>SLTA / SEDERAJAT</option>
                                        <option value="DIPLOMA I / II" <?php echo set_select('pendidikan', 'DIPLOMA I / II', ($pendidikan == 'DIPLOMA I / II') ? true : false); ?>>DIPLOMA I / II</option>
                                        <option value="DIPLOMA III" <?php echo set_select('pendidikan', 'DIPLOMA III', ($pendidikan == 'DIPLOMA III') ? true : false); ?>>DIPLOMA III</option>
                                        <option value="DIPLOMA IV / STRATA I" <?php echo set_select('pendidikan', 'DIPLOMA IV / STRATA I', ($pendidikan == 'DIPLOMA IV / STRATA I') ? true : false); ?>>DIPLOMA IV / STRATA I</option>
                                        <option value="STRATA II" <?php echo set_select('pendidikan', 'STRATA II', ($pendidikan == 'STRATA II') ? true : false); ?>>STRATA II</option>
                                        <option value="STRATA III" <?php echo set_select('pendidikan', 'STRATA III', ($pendidikan == 'STRATA III') ? true : false); ?>>STRATA III</option>
                                        <option value="BELUM MENGISI" <?php echo set_select('pendidikan', 'BELUM MENGISI', ($pendidikan == 'BELUM MENGISI') ? true : false); ?>>BELUM MENGISI</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" value="<?php echo set_value('pekerjaan', $pekerjaan); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" autocomplete="off" value="<?php echo set_value('nama_ayah', $nama_ayah); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" value="<?php echo set_value('nama_ibu', $nama_ibu); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" autocomplete="off" value="<?php echo set_value('rt', $rt); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW" autocomplete="off" value="<?php echo set_value('rw', $rw); ?>" required">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*No. KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo set_value('no_kk', $no_kk); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Warga Negara</label>
                                    <select name="warga_negara" class="form-control custom-select">
                                        <option value="">Pilih Warga Negara</option>
                                        <option value="WNI" <?php echo set_select('warga_negara', 'WNI', ($warga_negara == 'WNI') ? true : false); ?>>WNI</option>
                                        <option value="WNA" <?php echo set_select('warga_negara', 'WNA', ($warga_negara == 'WNA') ? true : false); ?>>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <!-- <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button> -->
                        <a href="<?= base_url('view_penduduk') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#datepicker", {
            dateFormat: "d-m-Y", // Format tanggal yang digunakan dalam input text
            locale: {
                firstDayOfWeek: 1, // Memulai minggu dengan hari Senin
                weekdays: {
                    shorthand: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                    longhand: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                },
                months: {
                    shorthand: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    longhand: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                },
            }
        });
    });
</script>