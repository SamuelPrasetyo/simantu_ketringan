<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-warning">
                <h4 class="m-b-0 text-white">Form Data Kelahiran</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('update_kelahiran'); ?>" method="post">
                    <input type="hidden" name="id_kelahiran" value="<?php echo $id_kelahiran; ?>">
                    <div class="form-body">
                        <h3 class="card-title">Edit Data Kelahiran</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No. Keterangan Lahir</label>
                                    <input type="text" name="no_ket_lahir" class="form-control" placeholder="Masukkan No. Keterangan Lahir" autocomplete="off" value="<?php echo set_value('no_ket_lahir', $no_ket_lahir); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Nama Bayi</label>
                                    <input type="text" name="nama_bayi" class="form-control" placeholder="Masukkan Nama Bayi" autocomplete="off" value="<?php echo set_value('nama_bayi', $nama_bayi); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Hari</label><br>
                                    <select name="hari" class="form-control custom-select" required>
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin" <?php echo set_select('hari', 'Senin', ($hari == 'Senin') ? true : false); ?>>Senin</option>
                                        <option value="Selasa" <?php echo set_select('hari', 'Selasa', ($hari == 'Selasa') ? true : false); ?>>Selasa</option>
                                        <option value="Rabu" <?php echo set_select('hari', 'Rabu', ($hari == 'Rabu') ? true : false); ?>>Rabu</option>
                                        <option value="Kamis" <?php echo set_select('hari', 'Kamis', ($hari == 'Kamis') ? true : false); ?>>Kamis</option>
                                        <option value="Jumat" <?php echo set_select('hari', 'Jumat', ($hari == 'Jumat') ? true : false); ?>>Jumat</option>
                                        <option value="Sabtu" <?php echo set_select('hari', 'Sabtu', ($hari == 'Sabtu') ? true : false); ?>>Sabtu</option>
                                        <option value="Minggu" <?php echo set_select('hari', 'Minggu', ($hari == 'Minggu') ? true : false); ?>>Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" id="datepicker" value="<?php echo set_value('tgl_lahir', $tgl_lahir); ?>" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jam</label>
                                    <input type="text" name="jam" class="form-control" id="timepicker" placeholder="Pilih Jam" value="<?php echo set_value('jam', $jam); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jenis Kelamin</label>
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
                                <div class="form-goup">
                                    <label class="control-label">*Jenis Kelahiran</label>
                                    <select name="jenis_kelahiran" class="form-control custom-select" required>
                                        <option value="">Pilih Jenis Kelahiran</option>
                                        <option value="Tunggal" <?php echo set_select('jenis_kelahiran', 'Tunggal', ($jenis_kelahiran == 'Tunggal') ? true : false); ?>>Tunggal</option>
                                        <option value="Kembar 2" <?php echo set_select('jenis_kelahiran', 'Kembar 2', ($jenis_kelahiran == 'Kembar 2') ? true : false); ?>>Kembar 2</option>
                                        <option value="Kembar 3" <?php echo set_select('jenis_kelahiran', 'Kembar 3', ($jenis_kelahiran == 'Kembar 3') ? true : false); ?>>Kembar 3</option>
                                        <option value="Lainnya" <?php echo set_select('jenis_kelahiran', 'Lainnya', ($jenis_kelahiran == 'Lainnya') ? true : false); ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Anak Ke</label>
                                    <input type="number" name="anak_ke" class="form-control" placeholder="Masukkan Anak Ke" value="<?php echo set_value('anak_ke', $anak_ke); ?>" autocomplete="off" required min="1">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Usia Gestasi</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Minggu</span>
                                        <input type="number" name="usia_gestasi" class="form-control" placeholder="Masukkan Usia Gestasi" value="<?php echo set_value('usia_gestasi', $usia_gestasi); ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Berat Lahir</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">Gram</span>
                                        <input type="number" name="berat_lahir" class="form-control" placeholder="Masukkan Berat Lahir" value="<?php echo set_value('berat_lahir', $berat_lahir); ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Panjang Badan</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">cm</span>
                                        <input type="number" name="panjang_badan" class="form-control" placeholder="Masukkan Panjang Badan" value="<?php echo set_value('panjang_badan', $panjang_badan); ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Lingkar Kepala</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">cm</span>
                                        <input type="number" name="lingkar_kepala" class="form-control" placeholder="Masukkan Lingkar Kepala" value="<?php echo set_value('lingkar_kepala', $lingkar_kepala); ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Tempat Lahiran</label>
                                    <select name="tempat_lahiran" class="form-control custom-select" required>
                                        <option value="">Pilih Tempat Lahiran</option>
                                        <option value="Rumah Sakit" <?php echo set_select('tempat_lahiran', 'Rumah Sakit', ($tempat_lahiran == 'Rumah Sakit') ? true : false); ?>>Rumah Sakit</option>
                                        <option value="Puskesmas" <?php echo set_select('tempat_lahiran', 'Puskesmas', ($tempat_lahiran == 'Puskesmas') ? true : false); ?>>Puskesmas</option>
                                        <option value="Rumah Bersalin" <?php echo set_select('tempat_lahiran', 'Rumah Bersalin', ($tempat_lahiran == 'Rumah Bersalin') ? true : false); ?>>Rumah Bersalin</option>
                                        <option value="Praktik Mandiri Bidan" <?php echo set_select('tempat_lahiran', 'Praktik Mandiri Bidan', ($tempat_lahiran == 'Praktik Mandiri Bidan') ? true : false); ?>>Praktik Mandiri Bidan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat Lahiran</label>
                                    <input type="text" name="alamat_lahiran" class="form-control" placeholder="Masukkan Alamat Lahiran" autocomplete="off" value="<?php echo set_value('alamat_lahiran', $alamat_lahiran); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-4">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" value="<?php echo set_value('nama_ibu', $nama_ibu); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-goup">
                                    <label class="control-label">*Umur Ibu</label>
                                    <input type="number" name="umur_ibu" class="form-control" placeholder="Masukkan Umur Ibu" autocomplete="off" value="<?php echo set_value('umur_ibu', $umur_ibu); ?>" required min="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*NIK Ibu</label>
                                    <input type="text" name="nik_ibu" class="form-control" placeholder="Masukkan NIK Ibu" autocomplete="off" value="<?php echo set_value('nik_ibu', $nik_ibu); ?>" required>
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
                                    <label class="control-label">*NIK Ayah</label>
                                    <input type="text" name="nik_ayah" class="form-control" placeholder="Masukkan NIK Ayah" autocomplete="off" value="<?php echo set_value('nik_ayah', $nik_ayah); ?>" required">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" value="<?php echo set_value('pekerjaan', $pekerjaan); ?>" required>
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
                                    <label class="control-label">*Alamat Rumah</label>
                                    <textarea name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" autocomplete="off" rows="5"><?php echo set_value('alamat_rumah', $alamat_rumah); ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kabupaten/Kota</label>
                                    <input type="text" name="kab_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" autocomplete="off" value="<?php echo set_value('kab_kota', $kab_kota); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <!-- <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button> -->
                        <a href="<?= base_url('view_kelahiran') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#timepicker", {
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
      time_24hr: true // Menggunakan format 24 jam
    });
  });
</script>


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