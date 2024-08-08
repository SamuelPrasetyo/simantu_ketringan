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

if (!function_exists('penduduk_validation_rules')) {
    function penduduk_validation_rules()
    {
        return array(
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => 'NIK wajib diisi.',
                    'numeric' => 'NIK harus berupa angka.',
                    'exact_length' => 'NIK harus tepat 16 digit.'
                )
            ),
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama wajib diisi.',
                    'max_length' => 'Nama tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'no_urut_kk',
                'label' => 'No Urut KK',
                'rules' => 'required|numeric',
                'errors' => array(
                    'required' => 'No Urut KK wajib diisi.',
                    'numeric' => 'No Urut KK harus berupa angka.'
                )
            ),
            array(
                'field' => 'tmp_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required|alpha',
                'errors' => array(
                    'required' => 'Tempat Lahir wajib diisi.',
                    'alpha' => 'Tempat Lahir harus berupa huruf.'
                )
            ),
            array(
                'field' => 'nama_ayah',
                'label' => 'Nama Ayah',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama Ayah wajib diisi.',
                    'max_length' => 'Nama Ayah tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'nama_ibu',
                'label' => 'Nama Ibu',
                'rules' => 'required|max_length[50]',
                'errors' => array(
                    'required' => 'Nama Ibu wajib diisi.',
                    'max_length' => 'Nama Ibu tidak boleh lebih dari 50 karakter.'
                )
            ),
            array(
                'field' => 'rt',
                'label' => 'RT',
                'rules' => 'required|numeric|max_length[3]',
                'errors' => array(
                    'required' => 'RT wajib diisi.',
                    'numeric' => 'RT harus berupa angka.',
                    'max_length' => 'RT tidak boleh lebih dari 3 digit.'
                )
            ),
            array(
                'field' => 'rw',
                'label' => 'RW',
                'rules' => 'required|numeric|max_length[3]',
                'errors' => array(
                    'required' => 'RW wajib diisi.',
                    'numeric' => 'RW harus berupa angka.',
                    'max_length' => 'RW tidak boleh lebih dari 3 digit.'
                )
            ),
            array(
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'required|numeric|exact_length[16]',
                'errors' => array(
                    'required' => 'No KK wajib diisi.',
                    'numeric' => 'No KK harus berupa angka.',
                    'exact_length' => 'No KK harus tepat 16 digit.'
                )
            ),
        );
    }
}