<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }

    .content,
    .footer {
        margin: 0, 0;
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
        width: 50%;
        /* Atur lebar sesuai kebutuhan */
        border-collapse: collapse;
    }

    p {
        font-size: 9pt;
    }

    td {
        font-size: 9pt;
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

    #box {
        font-size: 8pt;
    }

    .tanda-tangan {
        width: 5cm;
        height: 4cm;
        border: 1px solid black;
        text-align: center;
        padding-bottom: 120px;
    }

    .signature {
        padding-left: 10px;
        /* Jarak antara tanda tangan dengan box tanda tangan */
        text-align: center;
        vertical-align: top;
        width: 6cm;
    }
</style>

<div class="header">
    <h4 id="text-center" style="padding-top: -20px;">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</h4>
</div>

<div class="content">
    <table class="table table-bordered">
        <tr>
            <td style="width: 250px;">PEMERINTAH PROVINSI</td>
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

    <table style="padding-top: 10px;">
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
        <tr>
            <td>RT / RW</td>
            <td>: <?php echo $rt . ' / ' . $rw; ?></td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td>: <?php echo $kode_pos; ?></td>
        </tr>
    </table>
</div>

<div class="footer">
    <table class="center-table">
        <tr>
            <td class="pas-foto">
                <p id="box">Pas Foto (3x4)</p>
            </td>
            <td class="cap-jempol">
                <p id="box">Cap Jempol</p>
            </td>
            <td class="tanda-tangan">
                <p id="box">Spesimen Tanda Tangan</p>
            </td>
            <td class="signature">
                <p><?php echo "Ketringan" . ', ' . date('d-m-Y'); ?></p>
                <p>Pemohon</p>
                <p id="ttd"><br><br><br><br><br><?php echo $nama_pemohon; ?></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="vertical-align: top; padding-top: 10px;">
                <p style="font-size: 9pt;">Ket : Cap Jempol / Tanda Tangan</p>
            </td>
            <td class="signature">
                <p>Mengetahui</p>
                <p>Kepala Desa Ketringan</p>
                <p id="ttd"><br><br><br><br><br><?php echo $kepala_desa; ?></p>
            </td>
        </tr>
    </table>
</div>