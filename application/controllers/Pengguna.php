<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('isLogin')){
            redirect("Login");
		}
		$this->load->model('PenggunaModel', 'M_Pengguna');
	}

	public function index()
	{
		$data['dataPengguna'] = $this->M_Pengguna->getAll();
		$this->load->view('pengguna/lihatPengguna',$data);
	}

	public function tambahPengguna()
	{
		$this->load->view('pengguna/tambahPengguna');
	}

	public function hapusPengguna($id)
	{
		$this->M_Pengguna->delete($id);
		redirect('Pengguna');
	}

	public function savePengguna(){

		$this->M_Pengguna->save();
		redirect('Pengguna');
	}

	public function editPengguna($id = null)
	{
		$data = array(
				'pengguna' => $this->M_Pengguna->getById($id),
			);
		$this->load->view('pengguna/editPengguna',$data);
	}

	public function saveEeditPengguna()
	{
		$this->M_Pengguna->update();
		redirect('Pengguna');
	}

	public function LihatDetail($id = null)
	{
		$data = array(
				'pengguna' => $this->M_Pengguna->getById($id),
			);
		$this->load->view('pengguna/lihatDetailPengguna',$data);
	}
}
