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
		$data = array(
			'dimensi1' => $this->JawabanModel->getDataDimensi(1),
			'dimensi2' => $this->JawabanModel->getDataDimensi(2),
			'dimensi3' => $this->JawabanModel->getDataDimensi(3),
			'dimensi4' => $this->JawabanModel->getDataDimensi(4),
			'bobotdimensi1' => $this->JawabanModel->getDimensiData(1),
			'bobotdimensi2' => $this->JawabanModel->getDimensiData(2),
			'bobotdimensi3' => $this->JawabanModel->getDimensiData(3),
			'bobotdimensi4' => $this->JawabanModel->getDimensiData(4),
		);
		$this->load->view('dashboard', $data);
	}
}
