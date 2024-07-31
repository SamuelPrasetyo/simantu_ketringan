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

class PendudukController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk/PendudukModel');
    }

    public function index()
    {
        $data_penduduk = $this->PendudukModel->view();
        
        $data = array(
            'get_penduduk' => $data_penduduk,
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Data Penduduk',
            'title_content' => 'Penduduk',
            'link1' => 'Penduduk',
            'link2' => 'View Penduduk',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Penduduk/ViewPenduduk', $data_penduduk);
        $this->load->view('Layouts/Footer');
    }
}
