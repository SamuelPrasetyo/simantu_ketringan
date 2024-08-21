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
        $this->load->model('SimdesModel');
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
        $auto_fill = array(
            'kelurahan' => $this->SimdesModel->nama_kelurahan(),
            'kecamatan' => $this->SimdesModel->nama_kecamatan(),
            'kab_kota' => $this->SimdesModel->nama_kab_kota(),
            'provinsi' => $this->SimdesModel->nama_provinsi(),
            'kode_pos' => $this->SimdesModel->kode_pos(),
            'kepala_desa' => $this->SimdesModel->kepala_desa()
        );

        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Tambah Permohonan KTP',
            'title_content' => 'Tambah Permohonan KTP',
            'link1' => 'Permohonan KTP',
            'link2' => 'Add Permohonan KTP',
            'id_permohonan' => $this->KTPModel->generate_new_id()
        );

        $data = array_merge($data, $auto_fill);

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
                'alamat' => strtolower(ucwords($this->input->post('alamat'))),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'kode_pos' => $this->input->post('kode_pos'),
                'kelurahan' => $this->input->post('kelurahan'),
                'kecamatan' => $this->input->post('kecamatan'),
                'kab_kota' => $this->input->post('kab_kota'),
                'provinsi' => $this->input->post('provinsi'),
                'nama_pemohon' => strtoupper($this->input->post('nama_pemohon')),
                'kepala_desa' => $this->input->post('kepala_desa')
            );

            $kode_desa = array(
                'kode_kelurahan' => $this->SimdesModel->kode_kelurahan(),
                'kode_kecamatan' => $this->SimdesModel->kode_kecamatan(),
                'kode_kab_kota' => $this->SimdesModel->kode_kab_kota(),
                'kode_provinsi' => $this->SimdesModel->kode_provinsi()
            );

            if ($this->KTPModel->insert($data)) {
                $data = array_merge($data, $kode_desa);
                $this->generate_pdf($data);
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
        $html = $this->load->view('PermohonanKTP/PDFPermohonanKTP', $data, TRUE);

        // Generate PDF
        $mpdf->WriteHTML($html);
        $mpdf->Output('Formulir_Permohonan_KTP.pdf', 'I'); // 'I' untuk menampilkan di browser, 'D' untuk mengunduh langsung
    }

    public function cetak_pdf()
    {
        $id_permohonan = $this->uri->segment(2);
        $data = $this->KTPModel->detail($id_permohonan);
        $data = (array) $data;

        $kode_desa = array(
            'kode_kelurahan' => $this->SimdesModel->kode_kelurahan(),
            'kode_kecamatan' => $this->SimdesModel->kode_kecamatan(),
            'kode_kab_kota' => $this->SimdesModel->kode_kab_kota(),
            'kode_provinsi' => $this->SimdesModel->kode_provinsi()
        );

        $data = array_merge($data, $kode_desa);

        // Load library mPDF dari Composer
        require_once FCPATH . 'vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();

        // Load view template surat pengantar dan isi dengan data yang baru disimpan
        $html = $this->load->view('PermohonanKTP/PDFPermohonanKTP', $data, TRUE);

        // Generate PDF
        $mpdf->WriteHTML($html);
        $mpdf->Output('Formulir_Permohonan_KTP.pdf', 'I'); // 'I' untuk menampilkan di browser, 'D' untuk mengunduh langsung
    }
}
