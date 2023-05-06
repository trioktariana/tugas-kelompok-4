<?php defined('BASEPATH') OR exit('No direct script access allowed');

class JawabanModel extends CI_Model
{
    private $_table = "jawaban";

    public $id_kuesioner;
    public $jawaban;
    public $username;

    public function rules()
    {
        return [
            ['field' => 'jawaban',
            'label' => 'Jawaban',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kuesioner = $post["id_kuesioner"];
        $this->jawaban = $post["jawaban"];
        $this->username = $post["username"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kuesioner = $post["id_kuesioner"];
        $this->jawaban = $post["jawaban"];
        $this->username = $post["username"];
        return $this->db->update($this->_table, $this, array('id_kuesioner' => $post['id_kuesioner'],'username' => $post['username']));
    }
}