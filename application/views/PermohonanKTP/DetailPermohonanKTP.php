<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Detail</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Detail</th>
                                <th>Data Surat Pengantar</th>
                            </tr>
                        </thead>
                        <?php
                        $fields = [
                            'No. Pengantar' => $surat_pengantar->no_pengantar,
                            'NIK' => $surat_pengantar->nik,
                            'No. KK' => $surat_pengantar->no_kk,
                            'Nama' => $surat_pengantar->nama,
                            'Tempat Lahir' => $surat_pengantar->tmp_lahir,
                            'Tanggal Lahir' => $surat_pengantar->tgl_lahir,
                            'Jenis Kelamin' => $surat_pengantar->jenkel,
                            'Warga Negara' => $surat_pengantar->warga_negara,
                            'Agama' => $surat_pengantar->agama,
                            'Pekerjaan' => $surat_pengantar->pekerjaan,
                            'Alamat Rumah' => $surat_pengantar->alamat_rumah,
                            'Kecamatan' => $surat_pengantar->kecamatan,
                            'Kabupaten/Kota' => $surat_pengantar->kab_kota,
                            'Provinsi' => $surat_pengantar->provinsi,
                            'Keperluan' => $surat_pengantar->keperluan,
                            'Surat Keterangan' => $surat_pengantar->surat_keterangan,
                            'Tanggal Berlaku' => $surat_pengantar->tgl_berlaku,
                            'Keterangan Lain' => $surat_pengantar->ket_lain,
                            'Pemohon' => $surat_pengantar->pemohon,
                            'Kepala Desa' => $surat_pengantar->kepala_desa,
                        ];
                        ?>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($fields as $label => $value) {
                                echo "<tr>";
                                echo "<td>{$no}</td>";
                                echo "<td>{$label}</td>";
                                echo "<td>{$value}</td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>