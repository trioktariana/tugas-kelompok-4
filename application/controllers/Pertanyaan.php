<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// check if user is logged in
		if(!$this->session->userdata('isLogin')){
            redirect("Login");
		}
        $this->load->model('DimensiModel');
        $this->load->model('KuesionerModel');
	}

	public function index()
	{
        $data['pertanyaan'] = $this->KuesionerModel->getAll();
		$this->load->view('pertanyaan/index', $data);
	}

    public function create()
	{
        $data['dimensis'] = $this->DimensiModel->getAll();
        $data['variabels'] = $this->KuesionerModel->getVariabels();
		$this->load->view('pertanyaan/create', $data);
	}

    public function edit($id_pertanyaan)
	{
        $data['pertanyaan'] = $this->KuesionerModel->getById($id_pertanyaan);
        $data['dimensis'] = $this->DimensiModel->getAll();
        $data['variabels'] = $this->KuesionerModel->getVariabels();
		$this->load->view('pertanyaan/edit', $data);
	}

    public function view($id_pertanyaan)
	{
        $data['pertanyaan'] = $this->KuesionerModel->getById($id_pertanyaan);
		$this->load->view('pertanyaan/view', $data);
	}

    public function process()
    {
        $rules = $this->KuesionerModel->rules();
		$this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $id_pertanyaan = $this->input->post('id_kuesioner');
            if(isset($id_pertanyaan)){
                $data = [
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'id_dimensi' => $this->input->post('id_dimensi'),
                    'variabel' => $this->input->post('variabel'),
                    'pila' => $this->input->post('pila'),
                    'pilb' => $this->input->post('pilb'),
                    'pilc' => $this->input->post('pilc'),
                    'pild' => $this->input->post('pild'),
                    'pile' => $this->input->post('pile')
                ];
                $updated = $this->KuesionerModel->update($id_pertanyaan, $data);
            } else {
                $data = [
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'id_dimensi' => $this->input->post('id_dimensi'),
                    'variabel' => $this->input->post('variabel'),
                    'pila' => $this->input->post('pila'),
                    'pilb' => $this->input->post('pilb'),
                    'pilc' => $this->input->post('pilc'),
                    'pild' => $this->input->post('pild'),
                    'pile' => $this->input->post('pile')
                ];
                $saved = $this->KuesionerModel->save($data);
            }
            redirect('Pertanyaan');
        } else {
            $this->load->view('pertanyaan/create');
        }
    }

    public function delete($id_pertanyaan)
	{
        $deleted = $this->KuesionerModel->delete($id_pertanyaan);

		if ($deleted) {
			$this->session->set_flashdata('msg', 'Pertanyaan telah dihapus');
			redirect('Pertanyaan');
		}
	}
}
