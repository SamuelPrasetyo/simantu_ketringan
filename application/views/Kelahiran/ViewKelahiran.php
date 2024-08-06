<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kelahiran</h4>
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
                    <a href="<?= base_url('add_kelahiran') ?>" class="btn btn-primary">
                        <i class="mdi mdi-account-plus"></i> Tambah Data
                    </a>
                    <button class="btn btn-success" data-toggle="modal" data-target="#importModal">
                        <i class="mdi mdi-file-import"></i> Import Data
                    </button>

                    <!-- Modal Import -->
                    <div id="importModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="importModalLabel">Import Excel</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('import_kelahiran') ?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="excelFile">File Excel</label>
                                            <input type="file" class="form-control" id="excelFile" name="excelFile" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Upload</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Ket Lahir</th>
                                <th>Nama Bayi</th>
                                <th>Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Nama Ayah</th>
                                <th>NIK Ayah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>No. Ket Lahir</th>
                                <th>Nama Bayi</th>
                                <th>Tgl Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ibu</th>
                                <th>NIK Ibu</th>
                                <th>Nama Ayah</th>
                                <th>NIK Ayah</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get_kelahiran as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo urldecode($row->no_ket_lahir); ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama_bayi; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->hari; ?>, <?php echo $row->tgl_lahir; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->jenkel; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama_ibu; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nik_ibu; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama_ayah; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nik_ayah; ?>
                                    </td>
                                    <td style="width: 15%;">
                                        <a class="btn btn-info" href="<?php echo base_url('detail_kelahiran/' . $row->id_kelahiran); ?>">
                                            <i class="mdi mdi-library-books"></i>
                                        </a>
                                        <a class="btn btn-warning" href="<?php echo base_url('edit_kelahiran/' . $row->id_kelahiran); ?>">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <!-- <a class="btn btn-danger" href="<?php echo base_url('delete_kelahiran/' . $row->id_kelahiran); ?>">
                                            <i class="mdi mdi-delete"></i>
                                        </a> -->
                                        <button class="btn btn-danger" onclick="confirmDelete('<?php echo base_url('delete_kelahiran/' . $row->id_kelahiran); ?>')">
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