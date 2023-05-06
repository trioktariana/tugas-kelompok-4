<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DimensiModel extends CI_Model
{
    private $_table = "tbdimensi";

    public $id_dimensi;
    public $dimensi;
    public $bobot;

    public function rules()
    {
        return [
            ['field' => 'dimensi',
            'label' => 'Dimensi',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'Bobot',
            'rules' => ['numeric', 'required']],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_dimensi" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->dimensi = $post["dimensi"];
        $this->bobot = $post["bobot"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->dimensi = $post["dimensi"];
        $this->bobot = $post["bobot"];
        return $this->db->update($this->_table, $this, array('id_dimensi' => $post['id_dimensi']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_dimensi" => $id));
    }
}