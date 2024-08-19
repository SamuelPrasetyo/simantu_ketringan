<style>
    #text-center {
        text-align: center;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pengaturan</h4>
                <h6 class="card-subtitle">Data Desa Ketringan</h6>

                <!-- Message Notification Success or Failed -->
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php if ($this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <!-- End Message -->

                <div class="table-responsive m-t-40">
                    <!-- <a href="<?= base_url('add_aturan') ?>" class="btn btn-primary">
                        <i class="mdi mdi-account-plus"></i> Tambah Aturan
                    </a> -->

                    <!-- Table -->
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr id="text-center">
                                <th>No.</th>
                                <th>Aturan</th>
                                <th>Data Aturan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr id="text-center">
                                <th>No.</th>
                                <th>Aturan</th>
                                <th>Data Aturan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get_pengaturan as $row) { ?>
                                <tr id="text-center">
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->aturan; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->data_aturan; ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="<?php echo base_url('edit_settings/' . $row->id_aturan); ?>">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>