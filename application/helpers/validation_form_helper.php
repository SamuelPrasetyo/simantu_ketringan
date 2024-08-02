<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
    function penduduk_validation_rules() {
        return array(
            array(
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'required|numeric|exact_length[16]'
            ),
            array(
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required|alpha|max_length[50]'
            ),
            array(
                'field' => 'no_urut_kk',
                'label' => 'No Urut KK',
                'rules' => 'required|numeric'
            ),
            array(
                'field' => 'tmp_lahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required|alpha'
            ),
            array(
                'field' => 'nama_ayah',
                'label' => 'Nama Ayah',
                'rules' => 'required|alpha|max_length[50]'
            ),
            array(
                'field' => 'nama_ibu',
                'label' => 'Nama Ibu',
                'rules' => 'required|alpha|max_length[50]'
            ),
            array(
                'field' => 'rt',
                'label' => 'RT',
                'rules' => 'required|numeric|max_length[3]'
            ),
            array(
                'field' => 'rw',
                'label' => 'RW',
                'rules' => 'required|numeric|max_length[3]'
            ),
            array(
                'field' => 'no_kk',
                'label' => 'No KK',
                'rules' => 'required|numeric|exact_length[16]'
            ),
        );
    }
}