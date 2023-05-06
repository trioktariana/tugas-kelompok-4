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
            'label' => 'dimensi',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'bobot',
            'rules' => 'numeric|required'],
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

    public function save($dimensi)
    {
        return $this->db->insert($this->_table, $dimensi);
    }

    public function update($id_dimensi, $dimensi)
    {
        return $this->db->update($this->_table, $dimensi, ['id_dimensi' =>  $id_dimensi]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_dimensi" => $id));
    }
}