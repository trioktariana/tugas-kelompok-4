<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->model('PenggunaModel');
	}
	public function index()
	{
		$this->load->view('login');
	}

    public function processLogin() {
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);

			$data = $this->PenggunaModel->login($username, $password);

			if ($data == false) {
				$this->session->set_flashdata('msg', 'Username / Password Anda Salah.');
				redirect('Login');
			} else {
				$session = [
					'username' => $data->username,
					'hak_akses' => $data->hak_akses,
					'user_id' => $data->user_id,
					'isLogin' => true
				];
				$this->session->set_userdata($session);
				redirect('/');
			}
		} else {
			$this->session->set_flashdata('msg', validation_errors());
			redirect('Login');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}
