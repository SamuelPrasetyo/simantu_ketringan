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
                                    <input type="text" name="no_ket_lahir" class="form-control" placeholder="Masukkan No. Keterangan Lahir" autocomplete="off" value="<?php echo $no_ket_lahir; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Nama Bayi</label>
                                    <input type="text" name="nama_bayi" class="form-control" placeholder="Masukkan Nama Bayi" autocomplete="off" value="<?php echo $nama_bayi; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Hari</label><br>
                                    <select name="hari" class="form-control custom-select" required>
                                        <option value="">Pilih Hari</option>
                                        <option value="Senin" <?php echo ($hari == 'Senin') ? 'selected' : ''; ?>>Senin</option>
                                        <option value="Selasa" <?php echo ($hari == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
                                        <option value="Rabu" <?php echo ($hari == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
                                        <option value="Kamis" <?php echo ($hari == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
                                        <option value="Jumat" <?php echo ($hari == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
                                        <option value="Sabtu" <?php echo ($hari == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
                                        <option value="Minggu" <?php echo ($hari == 'Minggu') ? 'selected' : ''; ?>>Minggu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control" id="datepicker" value="<?php echo $tgl_lahir; ?>" autocomplete="off" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jam</label>
                                    <input type="text" name="jam" class="form-control" id="timepicker" placeholder="Pilih Jam" value="<?php echo $jam; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="laki-laki" name="jenkel" class="custom-control-input" value="L" 
                                            <?php if ($jenkel == "L") { echo "checked"; }; ?> required>
                                        <label class="custom-control-label" for="laki-laki">Laki-Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="perempuan" name="jenkel" class="custom-control-input" value="P" 
                                            <?php if ($jenkel == "P") { echo "checked"; }; ?> required>
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
                                        <option value="Tunggal" <?php echo ($jenis_kelahiran == 'Tunggal') ? 'selected' : ''; ?>>Tunggal</option>
                                        <option value="Kembar 2" <?php echo ($jenis_kelahiran == 'Kembar 2') ? 'selected' : ''; ?>>Kembar 2</option>
                                        <option value="Kembar 3" <?php echo ($jenis_kelahiran == 'Kembar 3') ? 'selected' : ''; ?>>Kembar 3</option>
                                        <option value="Lainnya" <?php echo ($jenis_kelahiran == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Anak Ke</label>
                                    <input type="number" name="anak_ke" class="form-control" placeholder="Masukkan Anak Ke" value="<?php echo $anak_ke; ?>" autocomplete="off" required min="1">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Usia Gestasi</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Minggu</span>
                                        <input type="number" name="usia_gestasi" class="form-control" placeholder="Masukkan Usia Gestasi" value="<?php echo $usia_gestasi; ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Berat Lahir</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">Gram</span>
                                        <input type="number" name="berat_lahir" class="form-control" placeholder="Masukkan Berat Lahir" value="<?php echo $berat_lahir; ?>" autocomplete="off" required" min="0">
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
                                        <input type="number" name="panjang_badan" class="form-control" placeholder="Masukkan Panjang Badan" value="<?php echo $panjang_badan; ?>" autocomplete="off" required" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Lingkar Kepala</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon">cm</span>
                                        <input type="number" name="lingkar_kepala" class="form-control" placeholder="Masukkan Lingkar Kepala" value="<?php echo $lingkar_kepala; ?>" autocomplete="off" required" min="0">
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
                                        <option value="Rumah Sakit" <?php echo ($tempat_lahiran == 'Rumah Sakit') ? 'selected' : ''; ?>>Rumah Sakit</option>
                                        <option value="Puskesmas" <?php echo ($tempat_lahiran == 'Puskesmas') ? 'selected' : ''; ?>>Puskesmas</option>
                                        <option value="Rumah Bersalin" <?php echo ($tempat_lahiran == 'Rumah Bersalin') ? 'selected' : ''; ?>>Rumah Bersalin</option>
                                        <option value="Praktik Mandiri Bidan" <?php echo ($tempat_lahiran == 'Praktik Mandiri Bidan') ? 'selected' : ''; ?>>Praktik Mandiri Bidan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat Lahiran</label>
                                    <input type="text" name="alamat_lahiran" class="form-control" placeholder="Masukkan Alamat Lahiran" autocomplete="off" value="<?php echo $alamat_lahiran; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-4">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu" autocomplete="off" value="<?php echo $nama_ibu; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-goup">
                                    <label class="control-label">*Umur Ibu</label>
                                    <input type="number" name="umur_ibu" class="form-control" placeholder="Masukkan Umur Ibu" autocomplete="off" value="<?php echo $umur_ibu; ?>" required min="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*NIK Ibu</label>
                                    <input type="text" name="nik_ibu" class="form-control" placeholder="Masukkan NIK Ibu" autocomplete="off" value="<?php echo $nik_ibu; ?>" required>
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
                                    <label class="control-label">*NIK Ayah</label>
                                    <input type="text" name="nik_ayah" class="form-control" placeholder="Masukkan NIK Ayah" autocomplete="off" value="<?php echo $nik_ayah; ?>" required">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" value="<?php echo $pekerjaan; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" autocomplete="off" value="<?php echo $kecamatan; ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat Rumah</label>
                                    <textarea name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" autocomplete="off" rows="5"><?php echo $alamat_rumah; ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kabupaten/Kota</label>
                                    <input type="text" name="kab_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" autocomplete="off" value="<?php echo $kab_kota; ?>" required>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-success"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button>
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