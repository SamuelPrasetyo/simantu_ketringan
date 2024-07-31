<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

class PendudukModel extends CI_Model
{
    public function view()
    {
        $query = $this->db->
            query("SELECT nik, nama, no_urut_kk, jenkel, 
                tmp_lahir, DATE_FORMAT(tgl_lahir, '%d %M %Y') AS tgl_lahir,
                gol_darah, agama, status_nikah, status_keluarga, pendidikan,
                pekerjaan, nama_ayah, nama_ibu, no_kk, rt, rw, warga_negara
                FROM penduduk");

        return $query->result();
    }

    
}