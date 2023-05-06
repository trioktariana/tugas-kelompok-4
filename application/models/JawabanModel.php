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

    public function getDashboardData(){
        $dim1 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=1) GROUP BY jawaban");
        $dim2 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=2) GROUP BY jawaban");
        $dim3 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=3) GROUP BY jawaban");
        $dim4 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=4) GROUP BY jawaban"); 
        return [
            'corporate' => $dim1->result(),
            'stakeholder' => $dim2->result(),
            'operational' => $dim3->result(),
            'future' => $dim4->result(),  
        ];
    }

    public function getKPIData(){
        $dim1 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=1) GROUP BY jawaban");
        $dim2 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=2) GROUP BY jawaban");
        $dim3 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=3) GROUP BY jawaban");
        $dim4 = $this->db->query("SELECT jawaban, CASE jawaban WHEN 'A' THEN Count(jawaban)*1 WHEN 'B' THEN COUNT(jawaban)*2 WHEN 'C' THEN COUNT(jawaban)*3 WHEN 'D' THEN COUNT(jawaban)*4 WHEN 'E' THEN COUNT(jawaban)*5 END as jumlah FROM jawaban,tbkuesioner WHERE (tbkuesioner.id_kuesioner=jawaban.id_kuesioner) AND (tbkuesioner.id_dimensi=4) GROUP BY jawaban"); 
        return [
            'corporate' => $dim1->result(),
            'stakeholder' => $dim2->result(),
            'operational' => $dim3->result(),
            'future' => $dim4->result(),  
        ];
    }
}