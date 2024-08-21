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

if (!function_exists('kelahiran_validation_rules')) {
    function kelahiran_validation_rules()
    {
        return array(
            array(
                'field' => 'nama_bayi',
                'label' => 'Nama Bayi',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama Bayi wajib diisi.',
                    'max_length' => 'Nama Bayi tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'anak_ke',
                'label' => 'Anak Ke',
                'rules' => 'trim|required|numeric|max_length[2]',
                'errors' => array(
                    'required' => 'Anak Ke wajib diisi.',
                    'numeric' => 'Anak Ke harus berupa angka.',
                    'max_length' => 'Anak Ke tidak boleh lebih dari 2 digit.'
                )
            ),
            array(
                'field' => 'usia_gestasi',
                'label' => 'Usia Gestasi',
                'rules' => 'trim|required|numeric|max_length[2]',
                'errors' => array(
                    'required' => 'Usia Gestasi wajib diisi.',
                    'numeric' => 'Usia Gestasi harus berupa angka.',
                    'max_length' => 'Usia Gestasi tidak boleh lebih dari 2 digit.'
                )
            ),
            array(
                'field' => 'berat_lahir',
                'label' => 'Berat Lahir',
                'rules' => 'trim|required|numeric|max_length[4]',
                'errors' => array(
                    'required' => 'Berat Lahir wajib diisi.',
                    'numeric' => 'Berat Lahir harus berupa angka.',
                    'max_length' => 'Berat Lahir tidak boleh lebih dari 4 digit.'
                )
            ),
            array(
                'field' => 'panjang_badan',
                'label' => 'Panjang Badan',
                'rules' => 'trim|required|numeric|max_length[2]',
                'errors' => array(
                    'required' => 'Panjang Badan wajib diisi.',
                    'numeric' => 'Panjang Badan harus berupa angka.',
                    'max_length' => 'Panjang Badan tidak boleh lebih dari 2 digit.'
                )
            ),
            array(
                'field' => 'lingkar_kepala',
                'label' => 'Lingkar Kepala',
                'rules' => 'trim|required|numeric|max_length[2]',
                'errors' => array(
                    'required' => 'Lingkar Kepala wajib diisi.',
                    'numeric' => 'Lingkar Kepala harus berupa angka.',
                    'max_length' => 'Lingkar Kepala tidak boleh lebih dari 2 digit.'
                )
            ),
            array(
                'field' => 'alamat_lahiran',
                'label' => 'Alamat Lahiran',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Alamat Lahiran wajib diisi.',
                    'max_length' => 'Alamat Lahiran tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'nama_ibu',
                'label' => 'Nama Ibu',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama Ibu wajib diisi.',
                    'max_length' => 'Nama Ibu tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'umur_ibu',
                'label' => 'Umur Ibu',
                'rules' => 'trim|required|numeric|max_length[3]',
                'errors' => array(
                    'required' => 'Umur Ibu wajib diisi.',
                    'numeric' => 'Umur Ibu harus berupa angka.',
                    'max_length' => 'Umur Ibu tidak boleh lebih dari 3 digit.'
                )
            ),
            array(
                'field' => 'nik_ibu',
                'label' => 'NIK Ibu',
                'rules' => 'trim|required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => 'NIK Ibu wajib diisi.',
                    'numeric' => 'NIK Ibu harus berupa angka.',
                    'exact_length' => 'NIK Ibu harus tepat 16 digit.'
                )
            ),
            array(
                'field' => 'nama_ayah',
                'label' => 'Nama Ayah',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama Ayah wajib diisi.',
                    'max_length' => 'Nama Ayah tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'nik_ayah',
                'label' => 'NIK Ayah',
                'rules' => 'trim|required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => 'NIK Ayah wajib diisi.',
                    'numeric' => 'NIK Ayah harus berupa angka.',
                    'exact_length' => 'NIK Ayah harus tepat 16 digit.'
                )
            ),
            array(
                'field' => 'pekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'trim|required|max_length[30]',
                'errors' => array(
                    'required' => 'Pekerjaan wajib diisi.',
                    'max_length' => 'Pekerjaan tidak boleh lebih dari 30 karakter.'
                )
            ),
            array(
                'field' => 'alamat_rumah',
                'label' => 'Alamat Rumah',
                'rules' => 'trim|required|max_length[50]',
                'errors' => array(
                    'required' => 'Alamat Rumah wajib diisi.',
                    'max_length' => 'Alamat Rumah tidak boleh lebih dari 50 karakter.'
                )
            ),
        );
    }
}