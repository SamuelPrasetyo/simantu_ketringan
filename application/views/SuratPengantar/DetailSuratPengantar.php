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
                                <th>Data Kelahiran</th>
                            </tr>
                        </thead>
                        <?php
                        $fields = [
                            "No. Keterangan Lahir" => $kelahiran->no_ket_lahir,
                            "Nama Bayi" => $kelahiran->nama_bayi,
                            "Hari" => $kelahiran->hari,
                            "Tanggal Lahir" => $kelahiran->tgl_lahir,
                            "Jam Lahir" => $kelahiran->jam,
                            "Jenis Kelamin" => $kelahiran->jenkel,
                            "Jenis Kelahiran" => $kelahiran->jenis_kelahiran,
                            "Anak Ke" => $kelahiran->anak_ke,
                            "Usia Gestasi" => $kelahiran->usia_gestasi,
                            "Berat Lahir" => $kelahiran->berat_lahir,
                            "Panjang Badan" => $kelahiran->panjang_badan,
                            "Lingkar Kepala" => $kelahiran->lingkar_kepala,
                            "Tempat Lahiran" => $kelahiran->tempat_lahiran,
                            "Alamat Lahiran" => $kelahiran->alamat_lahiran,
                            "Nama Ibu" => $kelahiran->nama_ibu,
                            "Umur Ibu" => $kelahiran->umur_ibu,
                            "NIK Ibu" => $kelahiran->nik_ibu,
                            "Nama Ayah" => $kelahiran->nama_ayah,
                            "NIK Ayah" => $kelahiran->nik_ayah,
                            "Pekerjaan Ayah" => $kelahiran->pekerjaan,
                            "Alamat Rumah" => $kelahiran->alamat_rumah,
                            "Kecamatan" => $kelahiran->kecamatan,
                            "Kabupaten/Kota" => $kelahiran->kab_kota,
                        ];
                        ?>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($fields as $label => $value) {
                                echo "<tr>";
                                echo "<td>{$no}</td>";
                                echo "<td>{$label}</td>";
                                if ($label == "Usia Gestasi") {
                                    echo "<td>{$value} Minggu</td>";
                                } elseif ($label == "Berat Lahir") {
                                    echo "<td>{$value} gram</td>";
                                } elseif ($label == "Panjang Badan" || $label == "Lingkar Kepala") {
                                    echo "<td>{$value} cm</td>";
                                } else {
                                    echo "<td>{$value}</td>";
                                }
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