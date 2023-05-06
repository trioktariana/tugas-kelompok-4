<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dimensi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// check if user is logged in
		if(!$this->session->userdata('isLogin')){
            redirect("Login");
		}
        $this->load->model('DimensiModel');
	}

	public function index()
	{
        $data['dimensi'] = $this->DimensiModel->getAll();
		$this->load->view('dimensi/index', $data);
	}

    public function create()
	{
		$this->load->view('dimensi/create');
	}

    public function edit($id_dimensi)
	{
        $data['dimensi'] = $this->DimensiModel->getById($id_dimensi);
		$this->load->view('dimensi/edit', $data);
	}

    public function view($id_dimensi)
	{
        $data['dimensi'] = $this->DimensiModel->getById($id_dimensi);
		$this->load->view('dimensi/view', $data);
	}

    public function process()
    {
        $rules = $this->DimensiModel->rules();
		$this->form_validation->set_rules($rules);
        if ($this->form_validation->run()) {
            $id_dimensi = $this->input->post('id_dimensi');
            if(isset($id_dimensi)){
                $data = [
                    'dimensi' => $this->input->post('dimensi'),
                    'bobot' => $this->input->post('bobot')
                ];
                $updated = $this->DimensiModel->update($id_dimensi, $data);
            } else {
                $data = [
                    'dimensi' => $this->input->post('dimensi'),
                    'bobot' => $this->input->post('bobot')
                ];
                $saved = $this->DimensiModel->save($data);
            }
            redirect('Dimensi');
        } else {
            $this->load->view('dimensi/create');
        }
    }

    public function delete($id_dimensi)
	{
        $deleted = $this->DimensiModel->delete($id_dimensi);

		if ($deleted) {
			$this->session->set_flashdata('msg', 'Dimensi telah dihapus');
			redirect('Dimensi');
		}
	}
}
