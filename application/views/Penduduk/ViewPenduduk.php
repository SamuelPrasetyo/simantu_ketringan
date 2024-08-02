<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Penduduk</h4>
                <h6 class="card-subtitle">Desa Ketringan</h6>
                <div class="table-responsive m-t-40">
                    <a href="<?= base_url('add_penduduk') ?>" class="btn btn-primary">
                        <i class="mdi mdi-account-plus"></i> Tambah Data
                    </a>
                    <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Tgl Lahir</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>No. KK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tempat Tgl Lahir</th>
                                <th>Agama</th>
                                <th>Status</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>No. KK</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $no = 1;
                            foreach ($get_penduduk as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nik; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->tmp_lahir; ?>, <?php echo $row->tgl_lahir; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->agama; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->status_nikah; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->pendidikan; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->pekerjaan; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->no_kk; ?>
                                    </td>
                                    <td style="width: 12%;">
                                        <a class="btn btn-info" href="<?php echo base_url('detail_penduduk/' . $row->nik); ?>">
                                            <i class="mdi mdi-library-books"></i>
                                        </a>
                                        <a class="btn btn-warning" href="<?php echo base_url('edit_penduduk/' . $row->nik); ?>">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger" onclick="confirmDelete('<?php echo base_url('delete_penduduk/' . $row->nik); ?>')">
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