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

class PendudukModel extends CI_Model
{
    public function view()
    {
        $query = $this->db->query(
            "SELECT * FROM penduduk"
        );

        return $query->result();
    }

    public function detail($nik)
    {
        $this->db->select("*, DATE_FORMAT(tgl_lahir, '%d %M %Y') AS tgl_lahir");

        $this->db->from('penduduk');
        $this->db->where('nik', $nik);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_penduduk($data)
    {
        return $this->db->insert('penduduk', $data);
    }

    public function get_edit($nik)
    {
        $this->db->select('*');

        $this->db->from('penduduk');
        $this->db->where('nik', $nik);
        $query = $this->db->get();

        return $query->row();
    }

    public function update_penduduk($data)
    {
        $this->db->where('nik', $data['nik']);
        return $this->db->update('penduduk', $data);
    }

    public function delete_penduduk($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->delete('penduduk');
    }

    public function check_nik_exists($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('penduduk');
        return $query->num_rows() > 0;
    }

    public function import_penduduk($data)
    {
        return $this->db->insert_batch('penduduk', $data);
    }
}
