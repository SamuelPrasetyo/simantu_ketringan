<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Permohonan KTP</h4>
                <h6 class="card-subtitle">Desa Ketringan</h6>

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
                    <a href="<?= base_url('add_permohonanktp') ?>" class="btn btn-primary">
                        <i class="mdi mdi-account-plus"></i> Tambah Data
                    </a>

                    <!-- Table -->
                    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>No. KK</th>
                                <th>Nama</th>
                                <th>Permohonan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>No. KK</th>
                                <th>Nama</th>
                                <th>Permohonan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get_permohonan as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nik; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->no_kk; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->permohonan; ?>
                                    </td>
                                    <td style="width: 16%;">
                                        <a class="btn btn-info" href="<?php echo base_url('pdf_permohonanktp/' . $row->id_permohonan); ?>" target="_blank">
                                            <i class="icon-printer"></i>
                                        </a>
                                        <a class="btn btn-info" href="<?php echo base_url('detail_permohonanktp/' . $row->id_permohonan); ?>">
                                            <i class="mdi mdi-library-books"></i>
                                        </a>
                                        <a class="btn btn-warning" href="<?php echo base_url('edit_permohonanktp/' . $row->id_permohonan); ?>">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger" onclick="confirmDelete('<?php echo base_url('delete_permohonanktp/' . $row->id_permohonan); ?>')">
                                            <i class="mdi mdi-delete"></i>
                                        </button>
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