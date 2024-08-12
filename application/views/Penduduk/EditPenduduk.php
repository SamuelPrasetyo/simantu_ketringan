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
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo $nik; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" value="<?php echo $nama; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No. Urut KK</label>
                                    <input type="text" name="no_urut_kk" class="form-control" placeholder="Masukkan No. Urut KK" autocomplete="off" value="<?php echo $no_urut_kk; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jenis Kelamin</label><br>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="L"
                                            <?php if ($jenkel == "L") {
                                                echo "checked";
                                            }; ?> required>
                                        <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="P"
                                            <?php if ($jenkel == "P") {
                                                echo "checked";
                                            }; ?> required>
                                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" autocomplete="off" value="<?php echo $tmp_lahir; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" placeholder="Pilih Tanggal" id="datepicker" value="<?php echo $tgl_lahir; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Golongan Darah</label>
                                    <select name="gol_darah" class="form-control custom-select" required>
                                        <option value="">Pilih Golongan Darah</option>
                                        <option value="A" <?php echo ($gol_darah == 'A') ? 'selected' : ''; ?>>A</option>
                                        <option value="B" <?php echo ($gol_darah == 'B') ? 'selected' : ''; ?>>B</option>
                                        <option value="AB" <?php echo ($gol_darah == 'AB') ? 'selected' : ''; ?>>AB</option>
                                        <option value="O" <?php echo ($gol_darah == 'O') ? 'selected' : ''; ?>>O</option>
                                        <option value="TIDAK TAHU" <?php echo ($gol_darah == 'TIDAK TAHU') ? 'selected' : ''; ?>>Tidak Tahu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Agama</label>
                                    <select name="agama" class="form-control custom-select" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam" <?php echo ($agama == 'Islam') ? 'selected' : ''; ?>>Islam</option>
                                        <option value="Katolik" <?php echo ($agama == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
                                        <option value="Protestan" <?php echo ($agama == 'Protestan') ? 'selected' : ''; ?>>Protestan</option>
                                        <option value="Hindu" <?php echo ($agama == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
                                        <option value="Buddha" <?php echo ($agama == 'Buddha') ? 'selected' : ''; ?>>Buddha</option>
                                        <option value="Konghucu" <?php echo ($agama == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
                                        <option value="Lainnya" <?php echo ($agama == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
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
                                        <option value="Kawin Tercatat" <?php echo ($status_nikah == 'Kawin Tercatat') ? 'selected' : ''; ?>>Kawin Tercatat</option>
                                        <option value="Kawin Tidak Tercatat" <?php echo ($status_nikah == 'Kawin Tidak Tercatat') ? 'selected' : ''; ?>>Kawin Tidak Tercatat</option>
                                        <option value="Belum Kawin" <?php echo ($status_nikah == 'Belum Kawin') ? 'selected' : ''; ?>>Belum Kawin</option>
                                        <option value="Cerai Hidup Tercatat" <?php echo ($status_nikah == 'Cerai Hidup Tercatat') ? 'selected' : ''; ?>>Cerai Hidup Tercatat</option>
                                        <option value="Cerai Hidup Tidak Tercatat" <?php echo ($status_nikah == 'Cerai Hidup Tidak Tercatat') ? 'selected' : ''; ?>>Cerai Hidup Tidak Tercatat</option>
                                        <option value="Cerai Mati" <?php echo ($status_nikah == 'Cerai Mati') ? 'selected' : ''; ?>>Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Status Keluarga</label>
                                    <select name="status_keluarga" class="form-control custom-select" required>
                                        <option value="">Pilih Status Keluarga</option>
                                        <option value="Kepala Keluarga" <?php echo ($status_keluarga == 'Kepala Keluarga') ? 'selected' : ''; ?>>Kepala Keluarga</option>
                                        <option value="Suami" <?php echo ($status_keluarga == 'Suami') ? 'selected' : ''; ?>>Suami</option>
                                        <option value="Istri" <?php echo ($status_keluarga == 'Istri') ? 'selected' : ''; ?>>Istri</option>
                                        <option value="Anak" <?php echo ($status_keluarga == 'Anak') ? 'selected' : ''; ?>>Anak</option>
                                        <option value="Orang Tua" <?php echo ($status_keluarga == 'Orang Tua') ? 'selected' : ''; ?>>Orang Tua</option>
                                        <option value="Famili Lain" <?php echo ($status_keluarga == 'Famili Lain') ? 'selected' : ''; ?>>Famili Lain</option>
                                        <option value="Pembantu" <?php echo ($status_keluarga == 'Pembantu') ? 'selected' : ''; ?>>Pembantu</option>
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
                                        <option value="TIDAK / BELUM SEKOLAH" <?php echo ($pendidikan == 'TIDAK / BELUM SEKOLAH') ? 'selected' : ''; ?>>TIDAK / BELUM SEKOLAH</option>
                                        <option value="BELUM TAMAT SD / SEDERAJAT" <?php echo ($pendidikan == 'BELUM TAMAT SD / SEDERAJAT') ? 'selected' : ''; ?>>BELUM TAMAT SD / SEDERAJAT</option>
                                        <option value="TAMAT SD / SEDERAJAT" <?php echo ($pendidikan == 'TAMAT SD / SEDERAJAT') ? 'selected' : ''; ?>>TAMAT SD / SEDERAJAT</option>
                                        <option value="SLTP / SEDERAJAT" <?php echo ($pendidikan == 'SLTP / SEDERAJAT') ? 'selected' : ''; ?>>SLTP / SEDERAJAT</option>
                                        <option value="SLTA / SEDERAJAT" <?php echo ($pendidikan == 'SLTA / SEDERAJAT') ? 'selected' : ''; ?>>SLTA / SEDERAJAT</option>
                                        <option value="DIPLOMA I / II" <?php echo ($pendidikan == 'DIPLOMA I / II') ? 'selected' : ''; ?>>DIPLOMA I / II</option>
                                        <option value="DIPLOMA III" <?php echo ($pendidikan == 'DIPLOMA III') ? 'selected' : ''; ?>>DIPLOMA III</option>
                                        <option value="DIPLOMA IV / STRATA I" <?php echo ($pendidikan == 'DIPLOMA IV / STRATA I') ? 'selected' : ''; ?>>DIPLOMA IV / STRATA I</option>
                                        <option value="STRATA II" <?php echo ($pendidikan == 'STRATA II') ? 'selected' : ''; ?>>STRATA II</option>
                                        <option value="STRATA III" <?php echo ($pendidikan == 'STRATA III') ? 'selected' : ''; ?>>STRATA III</option>
                                        <option value="BELUM MENGISI" <?php echo ($pendidikan == 'BELUM MENGISI') ? 'selected' : ''; ?>>BELUM MENGISI</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" value="<?php echo $pekerjaan; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" placeholder="Masukkan Nama Ayah" autocomplete="off" value="<?php echo $nama_ayah; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" value="<?php echo $nama_ibu; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RT</label>
                                    <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" autocomplete="off" value="<?php echo $rt; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*RW</label>
                                    <input type="text" name="rw" class="form-control" placeholder="Masukkan RW" autocomplete="off" value="<?php echo $rw; ?>" required">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*No. KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo $no_kk; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Warga Negara</label>
                                    <select name="warga_negara" class="form-control custom-select">
                                        <option value="">Pilih Warga Negara</option>
                                        <option value="WNI" <?php echo ($warga_negara == 'WNI') ? 'selected' : ''; ?>>WNI</option>
                                        <option value="WNA" <?php echo ($warga_negara == 'WNA') ? 'selected' : ''; ?>>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button>
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