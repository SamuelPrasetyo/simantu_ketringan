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

class KTPController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();

        $this->load->model('KTPModel');
        // $this->load->helper(array('form', 'validation_formktp'));
        $this->load->helper(array('form'));
    }

    public function index()
    {
        $data_permohonan = $this->KTPModel->view();

        $data = array(
            'get_permohonan' => $data_permohonan,
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Data Permohonan KTP',
            'title_content' => 'Permohonan KTP',
            'link1' => 'Permohonan KTP',
            'link2' => 'View Permohonan KTP',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('PermohonanKTP/ViewPermohonanKTP', $data);
        $this->load->view('Layouts/Footer');
    }

    public function delete_permohonan()
    {
        $id_permohonan = $this->uri->segment(2);
        $result = $this->KTPModel->delete($id_permohonan);

        if ($result) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus!');
        }

        redirect('view_permohonanktp');
    }
}
