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

class KelahiranController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();

        $this->load->model('KelahiranModel');
        $this->load->model('SimdesModel');
        $this->load->helper(array('form', 'validation_formkelahiran'));
    }

    public function index()
    {
        $data_kelahiran = $this->KelahiranModel->view();

        $data = array(
            'get_kelahiran' => $data_kelahiran,
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Data Kelahiran',
            'title_content' => 'Kelahiran',
            'link1' => 'Kelahiran',
            'link2' => 'View Kelahiran',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Kelahiran/ViewKelahiran', $data);
        $this->load->view('Layouts/Footer');
    }

    public function detail_kelahiran()
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Detail Kelahiran',
            'title_content' => 'Detail Kelahiran',
            'link1' => 'Kelahiran',
            'link2' => 'Detail Kelahiran'
        );

        $id_kelahiran = $this->uri->segment(2);
        $get_detail = $this->KelahiranModel->detail($id_kelahiran);

        $detail['kelahiran'] = $get_detail;

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Kelahiran/DetailKelahiran', $detail);
        $this->load->view('Layouts/Footer');
    }

    public function page_add()
    {
        $auto_fill = array(
            'kecamatan' => $this->SimdesModel->nama_kecamatan(),
            'kab_kota' => $this->SimdesModel->nama_kab_kota()
        );

        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Tambah Data Kelahiran',
            'title_content' => 'Tambah Data Kelahiran',
            'link1' => 'Kelahiran',
            'link2' => 'Add Kelahiran'
        );

        $data = array_merge($data, $auto_fill);

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Kelahiran/AddKelahiran', $data);
        $this->load->view('Layouts/Footer');
    }

    public function create_kelahiran()
    {
        $this->form_validation->set_rules(kelahiran_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $this->page_add();
        } else {
            $data = array(
                'no_ket_lahir' => $this->input->post('no_ket_lahir'),
                'nama_bayi' => strtoupper($this->input->post('nama_bayi')),
                'hari' => $this->input->post('hari'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jam' => $this->input->post('jam'),
                'jenkel' => $this->input->post('jenkel'),
                'jenis_kelahiran' => $this->input->post('jenis_kelahiran'),
                'anak_ke' => $this->input->post('anak_ke'),
                'usia_gestasi' => $this->input->post('usia_gestasi', ' Minggu'),
                'berat_lahir' => $this->input->post('berat_lahir'),
                'panjang_badan' => $this->input->post('panjang_badan'),
                'lingkar_kepala' => $this->input->post('lingkar_kepala'),
                'tempat_lahiran' => $this->input->post('tempat_lahiran'),
                'alamat_lahiran' => $this->input->post('alamat_lahiran'),
                'nama_ibu' => ucwords(strtolower($this->input->post('nama_ibu'))),
                'umur_ibu' => $this->input->post('umur_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'nama_ayah' => ucwords(strtolower($this->input->post('nama_ayah'))),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'pekerjaan' => ucwords(strtolower($this->input->post('pekerjaan'))),
                'alamat_rumah' => ucwords($this->input->post('alamat_rumah')),
                'kecamatan' => ucwords(strtolower($this->input->post('kecamatan'))),
                'kab_kota' => ucwords(strtolower($this->input->post('kab_kota'))),
            );

            if ($this->KelahiranModel->insert_kelahiran($data)) {
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
                redirect('view_kelahiran');
            } else {
                $this->session->set_flashdata('error', 'Data gagal ditambahkan!');
                redirect('add_kelahiran');
            }
        }
    }

    public function page_edit($id_kelahiran = null)
    {
        $data = array(
            'nama_user' => $this->session->userdata('nama_user'),
            'title' => 'Edit Data Kelahiran',
            'title_content' => 'Edit Data Kelahiran',
            'link1' => 'Kelahiran',
            'link2' => 'Edit Kelahiran',
        );

        if ($id_kelahiran == null) {
            $id_kelahiran = $this->uri->segment(2);
        }

        $data_kelahiran = $this->KelahiranModel->get_edit($id_kelahiran);

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Kelahiran/EditKelahiran', $data_kelahiran);
        $this->load->view('Layouts/Footer');
    }

    public function update_kelahiran()
    {
        $this->form_validation->set_rules(kelahiran_validation_rules());

        if ($this->form_validation->run() == FALSE) {
            $this->page_edit($this->input->post('id_kelahiran'));
        } else {
            $data = array(
                'id_kelahiran' => $this->input->post('id_kelahiran'),
                'no_ket_lahir' => $this->input->post('no_ket_lahir'),
                'nama_bayi' => strtoupper($this->input->post('nama_bayi')),
                'hari' => $this->input->post('hari'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jam' => $this->input->post('jam'),
                'jenkel' => $this->input->post('jenkel'),
                'jenis_kelahiran' => $this->input->post('jenis_kelahiran'),
                'anak_ke' => $this->input->post('anak_ke'),
                'usia_gestasi' => $this->input->post('usia_gestasi', ' Minggu'),
                'berat_lahir' => $this->input->post('berat_lahir'),
                'panjang_badan' => $this->input->post('panjang_badan'),
                'lingkar_kepala' => $this->input->post('lingkar_kepala'),
                'tempat_lahiran' => $this->input->post('tempat_lahiran'),
                'alamat_lahiran' => $this->input->post('alamat_lahiran'),
                'nama_ibu' => ucwords(strtolower($this->input->post('nama_ibu'))),
                'umur_ibu' => $this->input->post('umur_ibu'),
                'nik_ibu' => $this->input->post('nik_ibu'),
                'nama_ayah' => ucwords(strtolower($this->input->post('nama_ayah'))),
                'nik_ayah' => $this->input->post('nik_ayah'),
                'pekerjaan' => ucwords(strtolower($this->input->post('pekerjaan'))),
                'alamat_rumah' => ucwords($this->input->post('alamat_rumah')),
                'kecamatan' => ucwords(strtolower($this->input->post('kecamatan'))),
                'kab_kota' => ucwords(strtolower($this->input->post('kab_kota'))),
            );

            if ($this->KelahiranModel->update_kelahiran($data)) {
                $this->session->set_flashdata('success', 'Data berhasil diubah!');
                redirect('view_kelahiran');
            } else {
                $this->session->set_flashdata('error', 'Data gagal diubah!');
                redirect('edit_kelahiran');
            }
        }
    }

    public function delete_kelahiran()
    {
        $id_kelahiran = $this->uri->segment(2);
        $result = $this->KelahiranModel->delete_kelahiran($id_kelahiran);

        if ($result) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            $this->session->set_flashdata('error', 'Data gagal dihapus!');
        }

        redirect('view_kelahiran');
    }

    public function import_kelahiran()
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
                $no_ket_lahir = $sheetData[$i][0];
                if (!empty($no_ket_lahir) && !$this->KelahiranModel->check_no_ket_lahir_exists($no_ket_lahir)) {
                    $data[] = array(
                        'no_ket_lahir' => $no_ket_lahir,
                        'nama_bayi' => strtoupper(strtolower($sheetData[$i][1])),
                        'hari' => ucwords(strtolower($sheetData[$i][2])),
                        'tgl_lahir' => $sheetData[$i][3],
                        'jam' => $sheetData[$i][4],
                        'jenkel' => $sheetData[$i][5],
                        'jenis_kelahiran' => ucwords(strtolower($sheetData[$i][6])),
                        'anak_ke' => $sheetData[$i][7],
                        'usia_gestasi' => $sheetData[$i][8],
                        'berat_lahir' => $sheetData[$i][9],
                        'panjang_badan' => $sheetData[$i][10],
                        'lingkar_kepala' => $sheetData[$i][11],
                        'tempat_lahiran' => ucwords(strtolower($sheetData[$i][12])),
                        'alamat_lahiran' => ucwords(strtolower($sheetData[$i][13])),
                        'nama_ibu' => ucwords(strtolower($sheetData[$i][14])),
                        'umur_ibu' => $sheetData[$i][15],
                        'nik_ibu' => $sheetData[$i][16],
                        'nama_ayah' => ucwords(strtolower($sheetData[$i][17])),
                        'nik_ayah' => $sheetData[$i][18],
                        'pekerjaan' => ucwords(strtolower($sheetData[$i][19])),
                        'alamat_rumah' => ucwords(strtolower($sheetData[$i][20])),
                        'kecamatan' => ucwords(strtolower($sheetData[$i][21])),
                        'kab_kota' => ucwords(strtolower($sheetData[$i][22])),
                    );
                }
            }


            if (!empty($data)) {
                $this->KelahiranModel->import_kelahiran($data);
                $this->session->set_flashdata('success', 'Data berhasil diimport');
            } else {
                $this->session->set_flashdata('error', 'Tidak ada data baru untuk diimport');
            }
        } else {
            $this->session->set_flashdata('error', 'File tidak valid');
        }

        redirect('view_kelahiran');
    }
}
