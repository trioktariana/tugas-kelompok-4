<?php defined('BASEPATH') OR exit('No direct script access allowed');

class JawabanModel extends CI_Model
{
    private $_table = "jawaban";

    public $id_kuesioner;
    public $jawaban;
    public $username;
    public $jumlah;

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

    public function save($jawaban)
    {
        return $this->db->insert($this->_table, $jawaban);
    }

    public function delete($username)
    {
        return $this->db->delete($this->_table, array("username" => $username));
    }

    public function getDataDimensi($dimensi){
        return $this->db->query("SELECT jawaban,
                                        CASE jawaban
                                        WHEN 'A' THEN Count(jawaban)*1 
                                        WHEN 'B' THEN COUNT(jawaban)*2 
                                        WHEN 'C' THEN COUNT(jawaban)*3 
                                        WHEN 'D' THEN COUNT(jawaban)*4 
                                        WHEN 'E' THEN COUNT(jawaban)*5 
                                        END as jumlah
                                        FROM jawaban,tbkuesioner
                                        WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND
                                        (tbkuesioner.id_dimensi='$dimensi')
                                        GROUP BY jawaban");
    }

    public function getDimensiData($dimensi){
        return $this->db->query("SELECT dimensi,bobot FROM tbdimensi where id_dimensi=$dimensi")->row();
    }
}