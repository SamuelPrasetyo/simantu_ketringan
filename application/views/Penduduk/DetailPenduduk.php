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
                                <th>Data Penduduk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $fields = [
                                'No. KK' => $penduduk->no_kk,
                                'NIK' => $penduduk->nik,
                                'Nama' => $penduduk->nama,
                                'No. Urut KK' => $penduduk->no_urut_kk,
                                'Jenis Kelamin' => $penduduk->jenkel,
                                'Tempat Lahir' => $penduduk->tmp_lahir,
                                'Tanggal Lahir' => $penduduk->tgl_lahir,
                                'Golongan Darah' => $penduduk->gol_darah,
                                'Agama' => $penduduk->agama,
                                'Status Menikah' => $penduduk->status_nikah,
                                'Status Keluarga' => $penduduk->status_keluarga,
                                'Pendidikan' => $penduduk->pendidikan,
                                'Pekerjaan' => $penduduk->pekerjaan,
                                'Nama Ayah' => $penduduk->nama_ayah,
                                'Nama Ibu' => $penduduk->nama_ibu,
                                'RT' => $penduduk->rt,
                                'RW' => $penduduk->rw,
                                'Warga Negara' => $penduduk->warga_negara,
                            ];

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