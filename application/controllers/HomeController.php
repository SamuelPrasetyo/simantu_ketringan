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

class HomeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Memuat library 'auth'
        $this->load->library('Auth');
        // Memeriksa otentikasi pengguna
        $this->auth->check();
    }

    public function index()
    {
        $data = array(
            'title' => 'Beranda',
            'title_content' => 'Beranda',
            'nama_user' => $this->session->userdata('nama_user'),
            'link1' => 'Dashboard',
            'link2' => 'Beranda',
        );

        $this->load->view('Layouts/Header', $data);
        $this->load->view('Dashboard/Home');
        $this->load->view('Layouts/Footer');
    }

    
}