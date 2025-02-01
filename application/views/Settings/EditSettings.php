<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-dark">
                <h4 class="m-b-0 text-white">Form Pengaturan</h4>
            </div>
            <div class="card-body">
                <!-- Error Message -->
                <?php if (validation_errors()) : ?>
                    <div style="color: red;">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo base_url('update_settings'); ?>" method="post">
                    <div class="form-body">
                        <h3 class="card-title">Edit Data Aturan</h3>
                        <small class="form-control-feedback">* Menunjukkan Kolom yang Wajib Diisi</small>
                        <!-- <hr> -->
                        <input type="hidden" name="id_aturan" class="form-control" value="<?php echo set_value('id_aturan', $id_aturan); ?>">
                        <div class="row p-t-30">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Aturan</label>
                                    <input type="text" name="aturan" class="form-control" value="<?php echo set_value('aturan', $aturan); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">*Data Aturan</label>
                                    <input type="text" name="data_aturan" class="form-control" placeholder="Masukkan Data Aturan" autocomplete="off" value="<?php echo set_value('data_aturan', $data_aturan); ?>" required>
                                </div>
                            </div>
                        </div>
                        <!-- End of Form Body -->
                    </div>
                    <div class="form-actions mt-3">
                        <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-check"></i>&nbsp; Simpan</button>
                        <!-- <button type="reset" class="btn btn-danger"> <i class="fas fa-sync-alt"></i>&nbsp; Reset</button> -->
                        <a href="<?= base_url('view_settings') ?>" class="btn btn-inverse">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>