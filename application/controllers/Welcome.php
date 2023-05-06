<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// check if user is logged in
		if(!$this->session->userdata('isLogin')){
		  redirect("Login");
		}
	}

	public function index()
	{
		$this->load->view('dashboard');
	}
}
