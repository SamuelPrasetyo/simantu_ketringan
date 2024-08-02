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

class Auth {
    protected $CI;

    public function __construct() {
        // Mendapatkan instance CI
        $this->CI =& get_instance();
    }

    public function check() {
        // Memeriksa apakah sesi 'user_id' ada
        if (!$this->CI->session->userdata('user_id')) {
            // Jika tidak ada, arahkan ke halaman login
            redirect(base_url());
        }
    }
}