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

class UtilityModel extends CI_Model
{
    public function get_penduduk_by_nik($nik) {
        $this->db->select('*');
        $this->db->from('penduduk');
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    public function search_nik($search) {
        $this->db->select('nik');
        $this->db->from('penduduk');
        $this->db->like('nik', $search, 'after');
        $query = $this->db->get();
        return $query->result_array();
    }
}