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

class SuratPengantarController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();

        $this->load->model('SuratPengantarModel');
        $this->load->helper(array('form', 'validation_formsuratpengantar'));
    }

    public function index()
    {
        $data_suratpengantar = $this->SuratPengantarModel->view();

        $data = array(
            'get_suratpengantar' => $data_suratpengantar,
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Data Surat Pengantar',
            'title_content' => 'Surat Pengantar',
            'link1' => 'Surat Pengantar',
            'link2' => 'View Surat Pengantar',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('SuratPengantar/ViewSuratPengantar', $data_suratpengantar);
        $this->load->view('Layouts/Footer');
    }

    public function page_add()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Tambah Surat Pengantar',
            'title_content' => 'Tambah Surat Pengantar',
            'link1' => 'Surat Pengantar',
            'link2' => 'Add Surat Pengantar',
            'id_pengantar' => $this->SuratPengantarModel->generate_new_id()
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('SuratPengantar/AddSuratPengantar');
        $this->load->view('Layouts/Footer');
    }

    public function create_surat()
    {
        $this->form_validation->set_rules(suratpengantar_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $this->page_add();
        } else {
            $data = array(
                'id_pengantar' => $this->input->post('id_pengantar'),
                'no_pengantar' => $this->input->post('no_pengantar'),
                'nik' => $this->input->post('nik'),
                'no_kk' => $this->input->post('no_kk'),
                'nama' => strtoupper($this->input->post('nama')),
                'tmp_lahir' => ucwords(strtolower($this->input->post('tmp_lahir'))),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenkel' => $this->input->post('jenkel'),
                'warga_negara' => $this->input->post('warga_negara'),
                'agama' => $this->input->post('agama'),
                'pekerjaan' => ucwords(strtolower($this->input->post('pekerjaan'))),
                'alamat_rumah' => ucwords(strtolower($this->input->post('alamat_rumah'))),
                'kecamatan' => ucwords(strtolower($this->input->post('kecamatan'))),
                'kab_kota' => ucwords(strtolower($this->input->post('kab_kota'))),
                'provinsi' => ucwords(strtolower($this->input->post('provinsi'))),
                'keperluan' => ucwords(strtolower($this->input->post('keperluan'))),
                'surat_keterangan' => strtoupper($this->input->post('surat_keterangan')),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
                'ket_lain' => $this->input->post('ket_lain'),
                'pemohon' => strtoupper($this->input->post('pemohon')),
                'kepala_desa' => strtoupper($this->input->post('kepala_desa')),
            );

            if ($this->SuratPengantarModel->insert($data)) {
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
                redirect('view_suratpengantar');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan!');
                redirect('add_suratpengantar');
            }
        }
    }

    public function page_edit()
    {
    }

    public function update_surat()
    {
    }

    public function delete_surat()
    {
    }
}
