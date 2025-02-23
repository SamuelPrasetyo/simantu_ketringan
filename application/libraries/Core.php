<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Core
{
    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->database();
    }

    /* Fungsi untuk mengambil semua NIK di Table Penduduk */
    public function get_all_nik()
    {
        $query = "SELECT nik FROM penduduk";
        $exec = $this->CI->db->query($query);
        return $exec->result_array();
    }
}
