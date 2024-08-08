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

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class PendudukController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();

        $this->load->model('PendudukModel');
        $this->load->helper(array('form', 'validation_formpenduduk'));
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

    public function detail_penduduk()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Detail Penduduk',
            'title_content' => 'Detail Penduduk',
            'link1' => 'Penduduk',
            'link2' => 'Detail Penduduk'
        );

        $nik = $this->uri->segment(2);
        $get_detail = $this->PendudukModel->detail($nik);

        $detail['penduduk'] = $get_detail;

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Penduduk/DetailPenduduk', $detail);
        $this->load->view('Layouts/Footer');
    }

    public function page_add()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Tambah Data Penduduk',
            'title_content' => 'Tambah Data Penduduk',
            'link1' => 'Penduduk',
            'link2' => 'Add Penduduk'
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Penduduk/AddPenduduk');
        $this->load->view('Layouts/Footer');
    }

    public function create_penduduk()
    {
        $this->form_validation->set_rules(penduduk_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'nama_user' => $this->session->userdata('nama_user'),
                'title' => 'Tambah Data Penduduk',
                'title_content' => 'Tambah Data Penduduk',
                'link1' => 'Penduduk',
                'link2' => 'Add Penduduk',
            );

            $this->load->view('Layouts/Header', $data);
            $this->load->view('Penduduk/AddPenduduk');
            $this->load->view('Layouts/Footer');
        } else {
            $data = array(
                'nik' => $this->input->post('nik'),
                'nama' => ucwords(strtolower($this->input->post('nama'))),
                'no_urut_kk' => $this->input->post('no_urut_kk'),
                'jenkel' => $this->input->post('jenkel'),
                'tmp_lahir' => ucwords(strtolower($this->input->post('tmp_lahir'))),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'gol_darah' => $this->input->post('gol_darah'),
                'agama' => $this->input->post('agama'),
                'status_nikah' => $this->input->post('status_nikah'),
                'status_keluarga' => $this->input->post('status_keluarga'),
                'pendidikan' => $this->input->post('pendidikan'),
                'pekerjaan' => ucwords(strtolower($this->input->post('pekerjaan'))),
                'nama_ayah' => ucwords(strtolower($this->input->post('nama_ayah'))),
                'nama_ibu' => ucwords(strtolower($this->input->post('nama_ibu'))),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'no_kk' => $this->input->post('no_kk'),
                'warga_negara' => $this->input->post('warga_negara')
            );

            if ($this->PendudukModel->insert_penduduk($data)) {
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
                redirect('view_penduduk');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan!');
                redirect('add_penduduk');
            }
        }
    }

    public function page_edit()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Edit Data Penduduk',
            'title_content' => 'Edit Data Penduduk',
            'link1' => 'Penduduk',
            'link2' => 'Edit Penduduk',
        );

        $nik = $this->uri->segment(2);
        $data_penduduk = $this->PendudukModel->get_edit($nik);

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Penduduk/EditPenduduk', $data_penduduk);
        $this->load->view('Layouts/Footer');
    }

    public function update_penduduk()
    {
        $this->form_validation->set_rules(penduduk_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'nama_user' => $this->session->userdata('nama_user'),
                'title' => 'Edit Data Penduduk',
                'title_content' => 'Edit Data Penduduk',
                'link1' => 'Penduduk',
                'link2' => 'Edit Penduduk',
            );

            $this->load->view('Layouts/Header', $data);
            $this->load->view('Penduduk/EditPenduduk');
            $this->load->view('Layouts/Footer');
        } else {
            $data = array(
                'nik' => $this->input->post('nik'),
                'nama' => ucwords(strtolower($this->input->post('nama'))),
                'no_urut_kk' => $this->input->post('no_urut_kk'),
                'jenkel' => $this->input->post('jenkel'),
                'tmp_lahir' => ucwords(strtolower($this->input->post('tmp_lahir'))),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'gol_darah' => $this->input->post('gol_darah'),
                'agama' => $this->input->post('agama'),
                'status_nikah' => $this->input->post('status_nikah'),
                'status_keluarga' => $this->input->post('status_keluarga'),
                'pendidikan' => $this->input->post('pendidikan'),
                'pekerjaan' => ucwords(strtolower($this->input->post('pekerjaan'))),
                'nama_ayah' => ucwords(strtolower($this->input->post('nama_ayah'))),
                'nama_ibu' => ucwords(strtolower($this->input->post('nama_ibu'))),
                'rt' => $this->input->post('rt'),
                'rw' => $this->input->post('rw'),
                'no_kk' => $this->input->post('no_kk'),
                'warga_negara' => $this->input->post('warga_negara')
            );

            if ($this->PendudukModel->update_penduduk($data)) {
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('view_penduduk');
            } else {
                $this->session->set_flashdata('error', 'Data gagal diubah!');
                redirect('edit_penduduk');
            }
        }
    }

    public function delete_penduduk()
    {
        $nik = $this->uri->segment(2);
        $result = $this->PendudukModel->delete_penduduk($nik);

        if ($result) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus!');
        }

        redirect('view_penduduk');
    }

    public function import_penduduk()
    {
        $file_mimes = array('application/vnd.ms-excel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'text/csv');

        if (isset($_FILES['excelFile']['name']) && in_array($_FILES['excelFile']['type'], $file_mimes)) {
            $arr_file = explode('.', $_FILES['excelFile']['name']);
            $extension = end($arr_file);

            if ('csv' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }

            $spreadsheet = $reader->load($_FILES['excelFile']['tmp_name']);
            $sheetData = $spreadsheet->getActiveSheet()->toArray();

            $data = array();
            for ($i = 1; $i < count($sheetData); $i++) {
                $nik = $sheetData[$i][1];
                if (!empty($nik) && !$this->PendudukModel->check_nik_exists($nik)) {
                    $data[] = array(
                        'no_kk' => $sheetData[$i][0],
                        'nik' => $nik,
                        'nama' => ucwords(strtolower($sheetData[$i][2])),
                        'no_urut_kk' => $sheetData[$i][3],
                        'jenkel' => $sheetData[$i][4],
                        'tmp_lahir' => ucwords(strtolower($sheetData[$i][5])),
                        'tgl_lahir' => $sheetData[$i][6],
                        'gol_darah' => $sheetData[$i][7],
                        'agama' => $sheetData[$i][8],
                        'status_nikah' => ucwords(strtolower($sheetData[$i][9])),
                        'status_keluarga' => ucwords(strtolower($sheetData[$i][10])),
                        'pendidikan' => $sheetData[$i][11],
                        'pekerjaan' => ucwords(strtolower($sheetData[$i][12])),
                        'nama_ayah' => ucwords(strtolower($sheetData[$i][13])),
                        'nama_ibu' => ucwords(strtolower($sheetData[$i][14])),
                        'rt' => $sheetData[$i][15],
                        'rw' => $sheetData[$i][16],
                        'warga_negara' => $sheetData[$i][17]
                    );
                }
            }

            
            if (!empty($data)) {
                $this->PendudukModel->import_penduduk($data);
                $this->session->set_flashdata('success', 'Data berhasil diimport');
            } else {
                $this->session->set_flashdata('error', 'Tidak ada data baru untuk diimport');
            }
        } else {
            $this->session->set_flashdata('error', 'File tidak valid');
        }

        redirect('view_penduduk');
    }
}