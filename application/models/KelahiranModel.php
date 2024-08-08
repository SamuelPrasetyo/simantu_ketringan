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
            "SELECT * FROM kelahiran order by no_ket_lahir ASC"
        );

        return $query->result();
    }

    public function detail($id_kelahiran)
    {
        $this->db->select("*");

        $this->db->from('kelahiran');
        $this->db->where('id_kelahiran', $id_kelahiran);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_kelahiran($data)
    {
        return $this->db->insert('kelahiran', $data);
    }

    public function get_edit($id_kelahiran)
    {
        $this->db->select('*');

        $this->db->from('kelahiran');
        $this->db->where('id_kelahiran', $id_kelahiran);
        $query = $this->db->get();

        return $query->row();
    }

    public function update_kelahiran($data)
    {
        $this->db->where('id_kelahiran', $data['id_kelahiran']);
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
