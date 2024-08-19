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

class SettingsModel extends CI_Model
{
    public function view()
    {
        $query = $this->db->query(
            "SELECT * FROM pengaturan"
        );

        return $query->result();
    }

    public function get_edit($id_aturan)
    {
        return $this->db->get_where('pengaturan', 
            array('id_aturan' => $id_aturan))->row();
    }

    public function update($data)
    {
        $this->db->where('id_aturan', $data['id_aturan']);
        return $this->db->update('pengaturan', $data);    
    }
}
