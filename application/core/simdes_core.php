<?php
defined('BASEPATH') or exit('No direct script access allowed');
/***
 *!       _____                            __
 *!      / ___/____ _____ ___  __  _____  / /
 *!      \__ \/ __ `/ __ `__ \/ / / / _ \/ / 
 *!     ___/ / /_/ / / / / / / /_/ /  __/ /  
 *!    /____/\__,_/_/ /_/ /_/\__,_/\___/_/   
 *                                          
 *? Author : Samuel Prasetyo
 *? Created : 2024
 ** Quotes : "Ubahlah pola pikirmu sebab kunci kesuksesanmu 
 **           berasal dari bagaimana kamu berpikir..."
 */

class simdes_core extends CI_DB
{
    public function kepala_desa()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Kepala Desa'"
        );

        return $query->result();
    }

    /* Kode Desa */
    public function kode_provinsi()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Kode Provinsi'"
        );

        return $query->result();
    }

    public function kode_kab_kota()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Kode Kab/Kota'"
        );

        return $query->result();
    }

    public function kode_kecamatan()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Kode Kecamatan'"
        );

        return $query->result();
    }

    public function kode_kelurahan()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Kode Desa'"
        );

        return $query->result();
    }

    /* Nama Kode */
    public function nama_provinsi()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Nama Provinsi'"
        );

        return $query->result();
    }

    public function nama_kab_kota()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Nama Kab/Kota'"
        );

        return $query->result();
    }

    public function nama_kecamatan()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Nama Kecamatan'"
        );

        return $query->result();
    }

    public function nama_kelurahan()
    {
        $query = $this->db->query(
            "SELECT data_aturan FROM pengaturan WHERE aturan = 'Nama Desa'"
        );

        return $query->result();
    }
}