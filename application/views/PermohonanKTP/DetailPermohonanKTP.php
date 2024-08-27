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
                                <th>Data Permohonan KTP</th>
                            </tr>
                        </thead>
                        <?php
                        $fields = [
                            'Permohonan' => $permohonan_ktp->permohonan,
                            'Nama' => $permohonan_ktp->nama,
                            'NIK' => $permohonan_ktp->nik,
                            'No. KK' => $permohonan_ktp->no_kk,
                            'Alamat' => $permohonan_ktp->alamat,
                            'RT' => $permohonan_ktp->rt,
                            'RW' => $permohonan_ktp->rw,
                            'Kode Pos' => $permohonan_ktp->kode_pos,
                            'Kelurahan' => $permohonan_ktp->kelurahan,
                            'Kecamatan' => $permohonan_ktp->kecamatan,
                            'Kabupaten/Kota' => $permohonan_ktp->kab_kota,
                            'Provinsi' => $permohonan_ktp->provinsi,
                            'Nama Pemohon' => $permohonan_ktp->nama_pemohon,
                            'Kepala Desa' => $permohonan_ktp->kepala_desa
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