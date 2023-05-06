<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// check if user is logged in
		if(!$this->session->userdata('isLogin')){
            redirect("Login");
		}
        $this->load->model('JawabanModel');
        $this->load->model('KuesionerModel');
	}

	public function index()
	{
        $data['kuesioner'] = $this->KuesionerModel->getAll();
		$this->load->view('kuesioner', $data);
	}

    public function process()
    {
        try {
            $totalSoal = $this->input->post('jumlah');
            for ($i = 1; $i <= $totalSoal; $i++) {
                $data = [
                    'username' => $this->session->userdata('username'),
                    'jawaban' => $this->input->post('pilihan'.$i),
                    'id_kuesioner' => $this->input->post('id'.$i)
                ];
                $saved = $this->JawabanModel->save($data);
            }
            $arr = array(
                'isSuccess' => true, 
                'message' => "Data Berhasil disimpan", 
            );    
            echo json_encode( $arr );
        }
        //catch exception
        catch(Exception $e) {
            $arr = array(
                'isSuccess' => true, 
                'message' => $e->getMessage(), 
            );    
            echo json_encode( $arr );
        }
    }
}
