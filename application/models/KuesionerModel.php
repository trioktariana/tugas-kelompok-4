<?php defined('BASEPATH') OR exit('No direct script access allowed');

class KuesionerModel extends CI_Model
{
    private $_table = "tbkuesioner";

    public $id_kuesioner;
    public $pertanyaan;
    public $id_dimensi;
    public $variabel;
    public $pila;
    public $pilb;
    public $pilc;
    public $pild;
    public $pile;

    public function rules()
    {
        return [
            ['field' => 'pertanyaan',
            'label' => 'Pertanyaan',
            'rules' => 'required'],

            ['field' => 'id_dimensi',
            'label' => 'Dimensi',
            'rules' => 'required'],

            ['field' => 'variabel',
            'label' => 'Variabel',
            'rules' => 'required'],

            ['field' => 'pila',
            'label' => 'Pilihan A',
            'rules' => 'required'],

            ['field' => 'pilb',
            'label' => 'Pilihan B',
            'rules' => 'required'],

            ['field' => 'pilc',
            'label' => 'Pilihan C',
            'rules' => 'required'],

            ['field' => 'pild',
            'label' => 'Pilihan D',
            'rules' => 'required'],

            ['field' => 'pile',
            'label' => 'Pilihan E',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kuesioner" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->pertanyaan = $post["pertanyaan"];
        $this->id_dimensi = $post["id_dimensi"];
        $this->variabel = $post["variabel"];
        $this->pila = $post["pila"];
        $this->pilb = $post["pilb"];
        $this->pilc = $post["pilc"];
        $this->pild = $post["pild"];
        $this->pile = $post["pile"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->pertanyaan = $post["pertanyaan"];
        $this->id_dimensi = $post["id_dimensi"];
        $this->variabel = $post["variabel"];
        $this->pila = $post["pila"];
        $this->pilb = $post["pilb"];
        $this->pilc = $post["pilc"];
        $this->pild = $post["pild"];
        $this->pile = $post["pile"];
        return $this->db->update($this->_table, $this, array('id_kuesioner' => $post['id_kuesioner']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kuesioner" => $id));
    }
}