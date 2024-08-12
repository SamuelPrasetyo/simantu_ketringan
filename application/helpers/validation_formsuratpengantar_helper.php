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

if (!function_exists('suratpengantar_validation_rules')) {
    function suratpengantar_validation_rules()
    {
        return array(
            array(
                'field' => 'no_pengantar',
                'label' => 'No Pengantar',
                'rules' => 'trim|required|max_length[20]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 20 karakter.',
                ),
            ),
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'trim|required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'numeric' => '%s harus berupa angka.',
                    'exact_length' => '%s harus terdiri dari 16 angka.',
                ),
            ),
            array(
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'trim|required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'numeric' => '%s harus berupa angka.',
                    'exact_length' => '%s harus terdiri dari 16 angka.',
                ),
            ),
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 50 karakter.',
                ),
            ),
            array(
                'field' => 'tmp_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'trim|required|max_length[20]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 20 karakter.',
                ),
            ),
            array(
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 30 karakter.',
                ),
            ),
            array(
                'field' => 'alamat_rumah',
                'label' => 'Alamat Rumah',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 50 karakter.',
                ),
            ),
            array(
                'field' => 'kecamatan',
                'label' => 'Kecamatan',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 30 karakter.',
                ),
            ),
            array(
                'field' => 'kab_kota',
                'label' => 'Kabupaten/Kota',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 30 karakter.',
                ),
            ),
            array(
                'field' => 'provinsi',
                'label' => 'Provinsi',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 30 karakter.',
                ),
            ),
            array(
                'field' => 'keperluan',
                'label' => 'Keperluan',
                'rules' => 'trim|max_length[150]',
                'errors' => array(
                    'max_length' => '%s tidak boleh lebih dari 150 karakter.',
                ),
            ),
            array(
                'field' => 'surat_keterangan',
                'label' => 'Surat Keterangan',
                'rules' => 'trim|max_length[50]',
                'errors' => array(
                    'max_length' => '%s tidak boleh lebih dari 50 karakter.',
                ),
            ),
            array(
                'field' => 'ket_lain',
                'label' => 'Keterangan Lain',
                'rules' => 'trim|max_length[255]',
                'errors' => array(
                    'max_length' => '%s tidak boleh lebih dari 255 karakter.',
                ),
            ),
            array(
                'field' => 'pemohon',
                'label' => 'Pemohon',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 50 karakter.',
                ),
            ),
            array(
                'field' => 'kepala_desa',
                'label' => 'Kepala Desa',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => '%s wajib diisi.',
                    'max_length' => '%s tidak boleh lebih dari 50 karakter.',
                ),
            ),
        );
    }
}
