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

class SettingsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();

        $this->load->model('SettingsModel');
    }

    public function index()
    {
        $data_pengaturan = $this->SettingsModel->view();

        $data = array(
            'get_pengaturan' => $data_pengaturan,
            'title' => 'Pengaturan',
            'title_content' => 'Pengaturan',
            'nama_user' => $this->session->userdata('nama_user'),
            'link1' => 'SIMDES Ketringan',
            'link2' => 'Pengaturan',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Settings/ViewPengaturan', $data);
        $this->load->view('Layouts/Footer');
    }

    public function page_edit($id_aturan = null)
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Edit Data Aturan',
            'title_content' => 'Edit Data Aturan',
            'link1' => 'Pengaturan',
            'link2' => 'Edit Pengaturan',
        );

        if ($id_aturan == null) {
            $id_aturan = $this->uri->segment(2);
        }

        $data_aturan = $this->SettingsModel->get_edit($id_aturan);

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Settings/EditSettings', $data_aturan);
        $this->load->view('Layouts/Footer');    
    }

    public function update()
    {
        $this->form_validation->set_rules('data_aturan', 'Data Aturan', 'required|max_length[100]');

        $id_aturan = $this->input->post('id_aturan');

        if ($this->form_validation->run() == FALSE) {
            $this->page_edit($id_aturan);
        } else {
            $data = array(
                'id_aturan' => $this->input->post('id_aturan'),
                'aturan' => $this->input->post('aturan'),
                'data_aturan' => $this->input->post('data_aturan'),
            );

            if ($this->SettingsModel->update($data)) {
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('view_settings');
            } else {
                $this->session->set_flashdata('error', 'Data gagal diubah!');
                redirect('edit_settings');
            }
        }
    }
}