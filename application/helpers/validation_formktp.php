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

if (!function_exists('formktp_validation_rules')) {
    function formktp_validation_rules()
    {
        return array(
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama wajib diisi.',
                    'max_length' => 'Nama tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'trim|required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => 'NIK wajib diisi.',
                    'numeric' => 'NIK harus berupa angka.',
                    'exact_length' => 'NIK harus tepat 16 digit.'
                )
            ),
            array(
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'trim|required|numeric|max_length[16]',
                'errors' => array(
                    'required' => 'No KK wajib diisi.',
                    'numeric' => 'No KK harus berupa angka.',
                    'max_length' => 'No KK tidak boleh lebih dari 16 digit.'
                )
            ),
            array(
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Alamat wajib diisi.',
                    'max_length' => 'Alamat tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'rt',
                'label' => 'RT',
                'rules' => 'trim|required|numeric|max_length[3]',
                'errors' => array(
                    'required' => 'RT wajib diisi.',
                    'numeric' => 'RT harus berupa angka.',
                    'max_length' => 'RT tidak boleh lebih dari 3 digit.'
                )
            ),
            array(
                'field' => 'rw',
                'label' => 'RW',
                'rules' => 'trim|required|numeric|max_length[3]',
                'errors' => array(
                    'required' => 'RW wajib diisi.',
                    'numeric' => 'RW harus berupa angka.',
                    'max_length' => 'RW tidak boleh lebih dari 3 digit.'
                )
            ),
            array(
                'field' => 'kode_pos',
                'label' => 'Kode Pos',
                'rules' => 'trim|required|numeric|max_length[5]',
                'errors' => array(
                    'required' => 'Kode Pos wajib diisi.',
                    'numeric' => 'Kode Pos harus berupa angka.',
                    'max_length' => 'Kode Pos tidak boleh lebih dari 5 digit.'
                )
            ),
            array(
                'field' => 'kelurahan',
                'label' => 'Kelurahan',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => 'Kelurahan wajib diisi.',
                    'max_length' => 'Kelurahan tidak boleh lebih dari 30 karakter.'
                )
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
                'field' => 'nama_pemohon',
                'label' => 'Nama Pemohon',
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