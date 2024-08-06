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

class KelahiranModel extends CI_Model
{
    public function view()
    {
        $query = $this->db->query(
            "SELECT *, DATE_FORMAT(tgl_lahir, '%d %M %Y') AS tgl_lahir
                FROM kelahiran"
        );

        return $query->result();
    }

    public function detail($no_ket_lahir)
    {
        $this->db->select("*, DATE_FORMAT(tgl_lahir, '%d %M %Y') AS tgl_lahir");

        $this->db->from('kelahiran');
        $this->db->where('no_ket_lahir', $no_ket_lahir);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_kelahiran($data)
    {
        return $this->db->insert('kelahiran', $data);
    }

    public function get_edit($no_ket_lahir)
    {
        $this->db->select('*');

        $this->db->from('kelahiran');
        $this->db->where('no_ket_lahir', $no_ket_lahir);
        $query = $this->db->get();

        return $query->row();
    }

    public function update_kelahiran($data)
    {
        $this->db->where('no_ket_lahir', $data['no_ket_lahir']);
        return $this->db->update('kelahiran', $data);
    }

    public function delete_kelahiran($id_kelahiran)
    {
        $this->db->where('id_kelahiran', $id_kelahiran);
        return $this->db->delete('kelahiran');
    }

    public function check_no_ket_lahir_exists($no_ket_lahir)
    {
        $this->db->where('no_ket_lahir', $no_ket_lahir);
        $query = $this->db->get('kelahiran');
        return $query->num_rows() > 0;
    }

    public function import_kelahiran($data)
    {
        return $this->db->insert_batch('kelahiran', $data);
    }
}
