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

class SuratPengantarModel extends CI_Model
{
    public function get_last_id()
    {
        $this->db->select('id_pengantar');
        $this->db->order_by('id_pengantar', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get('surat_pengantar');

        if ($query->num_rows() > 0) {
            return $query->row()->id_pengantar;
        } else {
            return null;
        }
    }

    public function generate_new_id()
    {
        $last_id = $this->get_last_id();
        $date = date('dmY');

        if ($last_id) {
            // Ambil 3 digit terakhir dari last_id
            $last_number = substr($last_id, -3);

            // Tambahkan 1 pada 3 digit terakhir
            $new_number = str_pad($last_number + 1, 3, '0', STR_PAD_LEFT);
        } else {
            // Jika tidak ada data, mulai dari 000
            $new_number = '001';
        }

        // Mengkombinasi tanggal dengan 3 digit unik
        $new_id = $date . $new_number;

        return $new_id;
    }

    public function view()
    {
        $query = $this->db->query(
            "SELECT * FROM surat_pengantar"
        );

        return $query->result();
    }

    public function insert($data)
    {
        return $this->db->insert('surat_pengantar', $data);
    }

    public function get_edit($id_pengantar)
    {
        $this->db->select('*');

        $this->db->from('surat_pengantar');
        $this->db->where('id_pengantar', $id_pengantar);
        $query = $this->db->get();

        return $query->row();
    }

    public function update($data)
    {
        $this->db->where('id_pengantar', $data['id_pengantar']);
        return $this->db->update('surat_pengantar', $data);
    }

    public function delete($id_pengantar)
    {
        $this->db->where('id_pengantar', $id_pengantar);
        return $this->db->delete('surat_pengantar');
    }
}