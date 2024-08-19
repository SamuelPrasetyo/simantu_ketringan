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
        $this->load->helper(array('form', 'validation_formktp'));
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

    public function page_add()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Tambah Permohonan KTP',
            'title_content' => 'Tambah Permohonan KTP',
            'link1' => 'Permohonan KTP',
            'link2' => 'Add Permohonan KTP',
            'id_permohonan' => $this->KTPModel->generate_new_id()
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('PermohonanKTP/AddPermohonanKTP', $data);
        $this->load->view('Layouts/Footer');
    }

    public function create_permohonan()
    {
        $this->form_validation->set_rules(formktp_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $this->page_add();
        } else {
            $data = array(
                'id_permohonan' => $this->input->post('id_permohonan'),
                'permohonan' => $this->input->post('permohonan'),
                'nama' => strtoupper($this->input->post('nama')),
                'nik' => $this->input->post('nik'),
                'no_kk' => $this->input->post('no_kk'),
                'alamat' => ucwords(strtolower($this->input->post('alamat'))),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'kode_pos' => $this->input->post('kode_pos'),
                'kelurahan' => ucwords(strtolower($this->input->post('kelurahan'))),
                'kecamatan' => ucwords(strtolower($this->input->post('kecamatan'))),
                'kab_kota' => ucwords(strtolower($this->input->post('kab_kota'))),
                'provinsi' => ucwords(strtolower($this->input->post('provinsi'))),
                'nama_pemohon' => strtoupper($this->input->post('nama_pemohon')),
                'kepala_desa' => strtoupper($this->input->post('kepala_desa')),
            );

            if ($this->KTPModel->insert($data)) {
                // $this->generate_pdf($data);
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
                redirect('view_permohonanktp');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan!');
                redirect('add_permohonanktp');
            }
        }
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

    public function generate_pdf($data)
    {
        // Load library mPDF dari Composer
        require_once FCPATH . 'vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        // Load view template surat pengantar dan isi dengan data yang baru disimpan
        $html = $this->load->view('PermohananKTP/PDFPermohonanKTP', $data, TRUE);

        // Generate PDF
        $mpdf->WriteHTML($html);
        $mpdf->Output('Surat_Pengantar.pdf', 'I'); // 'I' untuk menampilkan di browser, 'D' untuk mengunduh langsung
    }
}
