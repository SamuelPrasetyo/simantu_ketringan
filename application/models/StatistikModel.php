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

class StatistikModel extends CI_Model
{
    public function jumlah_penduduk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS total_penduduk FROM penduduk");
        $result = $query->row();

        return $result->total_penduduk;
    }

    public function jumlah_keluarga()
    {
        $query = $this->db->
                query("SELECT COUNT(DISTINCT no_kk) AS total_keluarga
                    FROM penduduk
                    WHERE no_kk IS NOT NULL
                ");
        $result = $query->row();

        return $result->total_keluarga;
    }

    public function jumlah_lakilaki()
    {
        $query = $this->db->
                query("SELECT COUNT(jenkel) AS total_lakilaki 
                    FROM penduduk
                    WHERE jenkel = 'L'
                ");
        $result = $query->row();

        return $result->total_lakilaki;
    }

    public function jumlah_perempuan()
    {
        $query = $this->db->
                query("SELECT COUNT(jenkel) AS total_perempuan 
                    FROM penduduk
                    WHERE jenkel = 'P'
                ");
        $result = $query->row();

        return $result->total_perempuan;
    }
}
