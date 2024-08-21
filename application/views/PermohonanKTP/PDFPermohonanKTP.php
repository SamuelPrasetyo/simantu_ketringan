<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }

    .content, .footer {
        margin: 0, 5%;
        padding-top: 5%;
    }

    #padding-left-1 {
        padding-left: 5%;
    }

    #padding-left-2 {
        padding-left: 10%;
    }

    #ttd {
        padding-top: 100px;
        text-align: center;
        text-decoration: underline;
        font-weight: bold;
    }

    #permohonan_ktp {
        font-style: italic;
        text-decoration: underline;
    }

    #text-center {
        text-align: center;
    }

    .center-table {
        margin: auto;
        width: 50%; /* Atur lebar sesuai kebutuhan */
        border-collapse: collapse;
    }

    p {
        font-size: 10pt;
    }

    td {
        font-size: 10pt;
    }

    h3 {
        font-weight: bold;
    }

    .pas-foto,
    .cap-jempol {
        width: 3cm;
        height: 4cm;
        border: 1px solid black;
        text-align: center;
        margin-right: 10px;
        padding-bottom: 120px;
    }

    .tanda-tangan {
        width: 6cm;
        height: 4cm;
        /* flex-grow: 1; */
        border: 1px solid black;
        text-align: center;
        padding-bottom: 120px;
    }
</style>

<div class="header">
    <h3 id="text-center">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</h3>
</div>

<div class="content">
    <table class="table table-bordered">
        <tr>
            <td style="width: 300px;">PEMERINTAH PROVINSI</td>
            <td style="width: 20px;">:</td>
            <td style="width: 100px;"><?php echo isset($kode_provinsi[0]->data_aturan) ? $kode_provinsi[0]->data_aturan : ''; ?></td>
            <td style="width: 100px;"><?php echo strtoupper($provinsi); ?></td>
        </tr>
        <tr>
            <td>PEMERINTAH KABUPATEN/KOTA</td>
            <td>:</td>
            <td><?php echo isset($kode_kab_kota[0]->data_aturan) ? $kode_kab_kota[0]->data_aturan : ''; ?></td>
            <td><?php echo strtoupper($kab_kota); ?></td>
        </tr>
        <tr>
            <td>KECAMATAN</td>
            <td>:</td>
            <td><?php echo isset($kode_kecamatan[0]->data_aturan) ? $kode_kecamatan[0]->data_aturan : ''; ?></td>
            <td><?php echo strtoupper($kecamatan); ?></td>
        </tr>
        <tr>
            <td>KELURAHAN/DESA</td>
            <td>:</td>
            <td><?php echo isset($kode_kelurahan[0]->data_aturan) ? $kode_kelurahan[0]->data_aturan : ''; ?></td>
            <td><?php echo strtoupper($kelurahan); ?></td>
        </tr>
    </table>

    <table style="margin-top: 5%;">
        <tr>
            <td id="permohonan_ktp" style="width: 180px;">PERMOHONAN KTP</td>
            <td>: <?php echo $permohonan; ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>No. KK</td>
            <td>: <?php echo $no_kk; ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: <?php echo $nik; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $alamat; ?></td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="padding-left: 28%;">&nbsp;RT</td>
            <td>: <?php echo $rt; ?></td>
            <td style="padding-left: 10%;">RW</td>
            <td>: <?php echo $rw; ?></td>
            <td style="padding-left: 10%;">Kode Pos</td>
            <td>: <?php echo $kode_pos; ?></td>
        </tr>
    </table>
</div>

<div class="footer">
    <table>
        <tr>
            <td class="pas-foto">
                <p>Pas Foto (3x4)</p>
            </td>
            <td class="cap-jempol">
                <p>Cap Jempol</p>
            </td>
            <td class="tanda-tangan">
                <p>Spesimen Tanda Tangan</p>
            </td>
        </tr>
    </table>

    <table width="100%" style="margin-top: 5%;">
        <tr>
            <td style="text-align: center;">
                <?php echo "Ketringan" . ', ' . date('d-m-Y'); ?>
            </td>
            <td style="text-align: center;">
                Mengetahui <br>
                Kepala Desa Ketringan
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Pemohon</td>
            <td style="text-align: center;">Kepala Desa</td>
        </tr>
        <tr>
            <td id="ttd"><?php echo $nama_pemohon; ?></td>
            <td id="ttd"><?php echo $kepala_desa; ?></td>
        </tr>
    </table>
</div>