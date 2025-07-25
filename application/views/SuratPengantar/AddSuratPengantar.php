<!-- <style>
    .color {
        background-color: #ffffff !important;
        color: #000 !important;
    }
</style> -->

<style>
    .close-btn {
        background-color: red;
    }

    .search-btn {
        /* background-color: #DCDCDC; */
        background-color: blue;
    }
</style>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-success">
                <h4 class="m-b-0 text-white">Form Surat Pengantar</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <form id="myForm" action="<?php echo base_url('create_suratpengantar'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Input Data Surat Pengantar</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*ID Surat Pengantar</label>
                                    <input type="text" name="id_pengantar" class="form-control" value="<?php echo $id_pengantar; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No. Surat Pengantar</label>
                                    <input type="text" name="no_pengantar" class="form-control" placeholder="Masukkan No. Surat Pengantar" autocomplete="off" value="<?php echo set_value('no_pengantar'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*NIK</label>
                                    <div class="input-group">
                                        <input type="search" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik'); ?>" required>
                                        <div class="input-group-append">
                                            <button type="button" id="search_nik" class="btn waves-effect waves-light btn-info"><i class="fa fa-search"></i> Cari</button>
                                            <!-- <button type="button" id="search_nik" class="btn waves-effect waves-light close-btn"><i class="fas fa-times" style="color: white;"></i></button> -->
                                            <!-- <button type="button" id="search_nik" class="btn waves-effect waves-light btn-secondary"><img src="assets\ic_close.png" alt="Close"></button> -->
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="row">
                                        <div class="col-md-9">
                                            <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" autocomplete="off" value="<?php echo set_value('nik'); ?>" required>
                                        </div>
                                        <div class="col-md-3">
                                            <button id="search_nik" class="btn btn-info" style="width: 100%;"><i class="fa fa-search"></i> Cari</button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*No KK</label>
                                    <input type="text" name="no_kk" class="form-control" placeholder="Masukkan No. KK" autocomplete="off" value="<?php echo set_value('no_kk'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" autocomplete="off" value="<?php echo set_value('nama'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir" autocomplete="off" value="<?php echo set_value('tmp_lahir'); ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Tanggal Lahir</label>
                                    <input type="text" name="tgl_lahir" class="form-control color" id="datepicker" placeholder="Pilih Tanggal" autocomplete="off" value="<?php echo set_value('tgl_lahir'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Jenis Kelamin</label>
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
                                <div class="form-goup">
                                    <label class="control-label">*Warga Negara</label>
                                    <select name="warga_negara" class="form-control custom-select">
                                        <option value="">Pilih Warga Negara</option>
                                        <option value="WNI" <?php echo set_select('warga_negara', 'WNI'); ?>>WNI</option>
                                        <option value="WNA" <?php echo set_select('warga_negara', 'WNA'); ?>>WNA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Agama</label>
                                    <select name="agama" class="form-control custom-select" required>
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam" <?php echo set_select('agama', 'Islam'); ?>>Islam</option>
                                        <option value="Katolik" <?php echo set_select('agama', 'Katolik'); ?>>Katolik</option>
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
                                    <label class="control-label">*Pekerjaan</label>
                                    <input type="text" name="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" autocomplete="off" value="<?php echo set_value('pekerjaan'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Alamat Rumah</label>
                                    <textarea name="alamat_rumah" class="form-control" placeholder="Masukkan Alamat Rumah" autocomplete="off" rows="5"><?php echo set_value('alamat_rumah'); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Nama Pemohon</label>
                                    <input type="text" name="pemohon" class="form-control" placeholder="Masukkan Nama Pemohon" autocomplete="off" value="<?php echo set_value('pemohon'); ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control" placeholder="Masukkan Keperluan" autocomplete="off" value="<?php echo set_value('keperluan'); ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">Surat Keterangan</label>
                                    <input type="text" name="surat_keterangan" class="form-control" placeholder="Masukkan Surat Keterangan" autocomplete="off" value="<?php echo set_value('surat_keterangan'); ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Tanggal Berlaku</label>
                                    <input type="text" name="tgl_berlaku" class="form-control" id="datepicker" value="<?php echo $tgl_berlaku; ?>" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-12">
                                <div class="form-goup">
                                    <label class="control-label">Keterangan Lain</label>
                                    <textarea name="ket_lain" class="form-control" placeholder="Masukkan Keterangan Lain" autocomplete="off" rows="5"><?php echo set_value('ket_lain'); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <hr style="border: 2px solid black; margin-top: 35px;">

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" placeholder="Masukkan Provinsi" autocomplete="off" value="<?php echo isset($provinsi[0]->data_aturan) ? $provinsi[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kabupaten/Kota</label>
                                    <input type="text" name="kab_kota" class="form-control" placeholder="Masukkan Kabupaten/Kota" autocomplete="off" value="<?php echo isset($kab_kota[0]->data_aturan) ? $kab_kota[0]->data_aturan : ''; ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-25">
                            <div class="col-md-6">
                                <div class="form-goup">
                                    <label class="control-label">*Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" autocomplete="off" value="<?php echo isset($kecamatan[0]->data_aturan) ? $kecamatan[0]->data_aturan : ''; ?>" readonly>
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
                        <!-- <a href="<?= base_url('pdf_suratpengantar') ?>" class="btn btn-info"><i class="icon-printer"></i>&nbsp; Cetak</a> -->
                        <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button>
                        <a href="<?= base_url('view_suratpengantar') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#search_nik').click(function(e) {
            e.preventDefault(); // Mencegah form submit otomatis

            let nik = $('input[name="nik"]').val().trim();

            if (nik === '') {
                // alert('Masukkan NIK terlebih dahulu!');
                $('input[name="no_kk"]').val('').prop('readonly', false);
                $('input[name="nama"]').val('').prop('readonly', false);
                $('input[name="tmp_lahir"]').val('').prop('readonly', false);
                $('input[name="tgl_lahir"]').val('').prop('disabled', false);

                // Uncheck both radio buttons and enable them
                $('#laki-laki, #perempuan').prop('checked', false).prop('disabled', false);

                // Reset select dropdowns to default (empty value) and enable them
                $('select[name="warga_negara"], select[name="agama"]').val('').trigger('change').prop('disabled', false);
                return;
            } else if (nik.length < 16) {
                alert('NIK harus terdiri dari 16 digit angka!');
                return;
            }

            $.ajax({
                url: 'get_penduduk_by_nik',
                type: 'GET',
                data: {
                    nik: nik
                },
                dataType: 'json',
                success: function(response) {
                    if (response.status === true) {
                        // Isi form dengan data dari database
                        $('input[name="no_kk"]').val(response.data.no_kk).prop('readonly', true);
                        $('input[name="nama"]').val(response.data.nama).prop('readonly', true);
                        $('input[name="tmp_lahir"]').val(response.data.tmp_lahir).prop('readonly', true);
                        $('input[name="tgl_lahir"]').val(response.data.tgl_lahir).prop('disabled', true);

                        // Pilih jenis kelamin
                        if (response.data.jenkel === 'L') {
                            $('#laki-laki').prop('checked', true).prop('disabled', true);
                            $('#perempuan').prop('disabled', true);
                        } else {
                            $('#perempuan').prop('checked', true).prop('disabled', true);
                            $('#laki-laki').prop('disabled', true);
                        }

                        // Set dropdown
                        $('select[name="warga_negara"]').val(response.data.warga_negara).prop('disabled', true);
                        $('select[name="agama"]').val(response.data.agama).prop('disabled', true);
                    } else {
                        alert('Data tidak ditemukan, silakan isi secara manual.');
                    }
                },
                error: function() {
                    alert('Terjadi kesalahan saat mengambil data.');
                }
            });
        });
    });

    document.getElementById('myForm').onsubmit = function(e) {
        var form = this;
        var hasError = <?php echo validation_errors() ? 'true' : 'false'; ?>;

        // Aktifkan semua input yang disabled agar datanya ikut terkirim
        var disabledFields = form.querySelectorAll(":disabled");
        disabledFields.forEach(function(field) {
            field.removeAttribute("disabled");
        });

        // Atur target form
        if (!hasError) {
            form.target = '_self';
        } else {
            form.target = '_self';
        }

        // (Opsional) Kembalikan field ke disabled setelah submit
        setTimeout(() => {
            disabledFields.forEach(function(field) {
                field.setAttribute("disabled", "true");
            });
        }, 1000);
    };

    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#timepicker", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true // Menggunakan format 24 jam
        });
    });

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

    document.addEventListener('DOMContentLoaded', function() {
        flatpickr("#dateRange", {
            mode: "range", // Mengaktifkan mode rentang
            dateFormat: "d-m-Y", // Format tanggal yang ditampilkan dalam input text
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
            },
            onChange: function(selectedDates, dateStr, instance) {
                console.log("Tanggal terpilih:", dateStr); // Ini akan menampilkan rentang tanggal dalam format "dd-mm-yyyy to dd-mm-yyyy"
            }
        });
    });
</script>