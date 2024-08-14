<?php

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

class KTPModel extends CI_Model
{
    public function get_last_id()
    {
        $this->db->select('id_permohonan');
        $this->db->order_by('id_permohonan', 'DESC');
        $this->db->limit(1);

        $query = $this->db->get('permohonan_ktp');

        if ($query->num_rows() > 0) {
            return $query->row()->id_permohonan;
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
            "SELECT * FROM permohonan_ktp"
        );

        return $query->result();
    }

    public function detail($id_permohonan)
    {
        $this->db->select("*");

        $this->db->from('permohonan_ktp');
        $this->db->where('id_permohonan', $id_permohonan);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert($data)
    {
        return $this->db->insert('permohonan_ktp', $data);
    }

    public function get_edit($id_permohonan)
    {
        $this->db->select('*');

        $this->db->from('permohonan_ktp');
        $this->db->where('id_permohonan', $id_permohonan);
        $query = $this->db->get();

        return $query->row();
    }

    public function update($data)
    {
        $this->db->where('id_permohonan', $data['id_permohonan']);
        return $this->db->update('permohonan_ktp', $data);
    }

    public function delete($id_permohonan)
    {
        $this->db->where('id_permohonan', $id_permohonan);
        return $this->db->delete('permohonan_ktp');
    }
}