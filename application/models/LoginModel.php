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

class LoginModel extends CI_Model
{
    public function auth_pegawai($username)
    {
        $query = $this->db->query("SELECT * FROM users WHERE username = '$username' LIMIT 1");

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $result = array(
                'username' => $row->username,
                'password' => $row->password,
                'nama_pegawai' => $row->nama_pegawai,
                'level' => $row->level
            );

            return $result;
        }

        return false;
    }
}
