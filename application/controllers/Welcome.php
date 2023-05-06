<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// check if user is logged in
		if(!$this->session->userdata('isLogin')){
		  redirect("Login");
		}
		$this->load->model('JawabanModel');
	}

	public function index()
	{
		$data = $this->JawabanModel->getDashboardData();
		$this->load->view('dashboard', $data);
	}
}
