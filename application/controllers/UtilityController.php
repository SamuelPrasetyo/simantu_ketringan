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

class UtilityController extends CI_Controller
{
    public function get_penduduk_by_nik() {
        $nik = $this->input->get('nik');
        $this->load->model('SuratPengantarModel');
        $data = $this->SuratPengantarModel->get_penduduk_by_nik($nik);
    
        if ($data) {
            echo json_encode(['success' => true, 'data' => $data]);
        } else {
            echo json_encode(['success' => false]);
        }
    }
    
    public function search_nik() {
        $search = $this->input->get('search');
        $this->load->model('SuratPengantarModel');
        $results = $this->SuratPengantarModel->search_nik($search);
        echo json_encode($results);
    }
}