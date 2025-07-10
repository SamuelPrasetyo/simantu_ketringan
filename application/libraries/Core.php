<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Core
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->database();
    }

    /* Fungsi untuk mengambil semua NIK di Table Penduduk */
    public function get_all_nik()
    {
        $query = "SELECT nik FROM penduduk";
        $exec = $this->CI->db->query($query);
        return $exec->result_array();
    }

    public function convertTanggal($tanggal = null)
    {
        // Jika tidak ada input, ambil tanggal hari ini
        if ($tanggal === null) {
            $tanggal = date('d-m-Y');
        }

        // Array bulan dalam Bahasa Indonesia
        $bulanIndo = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember'
        ];

        // Pecah tanggal: 31-12-2024 → [31, 12, 2024]
        $parts = explode('-', $tanggal);
        if (count($parts) !== 3) {
            return 'Format tanggal tidak valid';
        }

        $hari  = $parts[0];
        $bulan = $parts[1];
        $tahun = $parts[2];

        // Validasi bulan
        if (!isset($bulanIndo[$bulan])) {
            return 'Bulan tidak valid';
        }

        // Susun format baru
        return $hari . ' ' . $bulanIndo[$bulan] . ' ' . $tahun;
    }
}
