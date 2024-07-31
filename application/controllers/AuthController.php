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

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }

    public function index()
    {
        $this->load->view('Auth/Login');
    }

    public function aksi_login()
	{
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

		$cek_level = $this->LoginModel->auth_pegawai($username);

		if ($cek_level) {
			if (password_verify($password, $cek_level['password'])) {
				$data_session = array(
					'username' => $cek_level['username'],
					'nama_user' => $cek_level['nama_pegawai']
				);

				$this->session->set_userdata($data_session);

				if ($cek_level['level'] == 'Admin') {
					// Akses admin
					$this->session->set_userdata('masuk', TRUE);
					$this->session->set_userdata('akses', 'admin');
					$this->session->set_userdata('ses_username', $cek_level['username']);
					$this->session->set_userdata('ses_nama', $cek_level['nama_pegawai']);
					redirect('beranda');
				} else {
					// Akses Petugas
					$this->session->set_userdata('masuk', TRUE);
					$this->session->set_userdata('akses', 'pegawai');
					$this->session->set_userdata('ses_username', $cek_level['username']);
					$this->session->set_userdata('ses_nama', $cek_level['nama_pegawai']);
					redirect('beranda');
				}
			} else {
				// Password salah
				$url = base_url();
				echo $this->session->set_flashdata('msg', 'Password Salah');
				redirect($url);
			}
		} else {
			// Username tidak ditemukan
			$url = base_url();
			echo $this->session->set_flashdata('msg', 'Username Tidak Ditemukan');
			redirect($url);
		}
	}

    public function logout()
	{
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}

}