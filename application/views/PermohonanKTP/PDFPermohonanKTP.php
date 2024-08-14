<style>
    body {
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }

    .kop-surat {
        width: 100%;
        margin-bottom: 20px;
    }

    .kop-surat img {
        width: 100px;
        height: auto;
    }

    .kop-surat h1,
    .kop-surat h2,
    .kop-surat h3,
    .kop-surat p {
        margin: 0;
    }

    .kop-surat h2 {
        font-size: 16px;
        font-weight: bold;
    }

    .kop-surat p {
        font-size: 12px;
    }

    .kop-surat .line {
        border-top: 3px solid black;
        border-bottom: 1px solid black;
        margin-top: 5px;
    }

    .kop-surat .kode-desa {
        text-align: left;
        margin-top: 10px;
    }

    #ttd {
        padding-top: 100px;
        text-align: center;
        text-decoration: underline;
        font-weight: bold;
    }

    /* Additional styles */
    #text-center {
        text-align: center;
    }

    p {
        font-size: 9pt;
    }

    td {
        font-size: 9pt;
    }

    #logo-kop-surat {
        width: 12%;
        margin-left: 5%;
    }
</style>

<div class="kop-surat">
    <table width="100%">
        <tr>
            <td width="15%">
                <img src="template\assets\gambar\logo_kabblora.png" alt="Logo" id="logo-kop-surat">
            </td>
            <td style="text-align: center;">
                <h2>PEMERINTAH KABUPATEN BLORA</h2>
                <h2>KECAMATAN JIKEN</h2>
                <h2>DESA KETRINGAN</h2>
                <p style="font-style: italic;">Alamat : Jl. Ketringan – Bogorejo Kode Pos 58372 Email : <a href="mailto:desaketringan@gmail.com">desaketringan@gmail.com</a></p>
            </td>
        </tr>
    </table>
    <div class="line"></div>
    <div class="kode-desa">
        <p>Kode Desa 3316070006</p>
    </div>
</div>

<div class="header">
    <h4 id="text-center">SURAT KETERANGAN PENGANTAR</h4>
    <p id="text-center" style="padding-top: -15px;">No : <?php echo $no_pengantar; ?></p>
</div>

<div class="content">
    <p id="text-center">Yang bertanda tangan dibawah ini menandakan bahwa :</p>
    <table>
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td>: <?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>NIK</td>
            <td>: <?php echo $nik; ?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>No. KK</td>
            <td>: <?php echo $no_kk; ?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Tempat, Tanggal Lahir</td>
            <td>: <?php echo $tmp_lahir . ', ' . date('d-m-Y', strtotime($tgl_lahir)); ?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $jenkel; ?></td>
        </tr>
        <tr>
            <td>6.</td>
            <td>Warga Negara</td>
            <td>: <?php echo $warga_negara; ?></td>
        </tr>
        <tr>
            <td>7.</td>
            <td>Agama</td>
            <td>: <?php echo $agama; ?></td>
        </tr>
        <tr>
            <td>8.</td>
            <td>Pekerjaan</td>
            <td>: <?php echo $pekerjaan; ?></td>
        </tr>
        <tr>
            <td>9.</td>
            <td>Alamat</td>
            <td>: <?php echo $alamat_rumah; ?></td>
        </tr>
        <tr>
            <td>10.</td>
            <td>Kecamatan</td>
            <td>: <?php echo $kecamatan; ?></td>
        </tr>
        <tr>
            <td>11.</td>
            <td>Kab/Kota</td>
            <td>: <?php echo $kab_kota; ?></td>
        </tr>
        <tr>
            <td>12.</td>
            <td>Provinsi</td>
            <td>: <?php echo $provinsi; ?></td>
        </tr>
        <tr>
            <td>13.</td>
            <td>Keperluan</td>
            <td>: <?php echo $keperluan; ?></td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td>&nbsp;
                <span style="text-decoration: underline; margin-bottom: 20px;">
                    <?php echo $surat_keterangan; ?>
                </span>
            </td>
        </tr>
        <tr>
            <td>15.</td>
            <td>Tanggal Berlaku</td>
            <td>: <?php echo substr_replace($tgl_berlaku, 's/d', 11, 2); ?></td>
        </tr>
        <tr>
            <td>16.</td>
            <td>Keterangan Lain</td>
            <td>: <?php echo $ket_lain; ?></td>
        </tr>
    </table>
    <p id="text-center" style="margin-top: 5%;">Demikian untuk menjadikan maklum bagi yang berkepentingan</p>
</div>

<div class="footer" style="margin-top: 5%;">
    <table width="100%">
        <tr>
            <td style="width: 50%;"></td>
            <td style="text-align: center;">
                <?php echo "Ketringan" . ', ' . date('d-m-Y'); ?>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">Pemohon</td>
            <td style="text-align: center;">Kepala Desa</td>
        </tr>
        <tr>
            <td id="ttd"><?php echo $pemohon; ?></td>
            <td id="ttd"><?php echo $kepala_desa; ?></td>
        </tr>
    </table>
</div>