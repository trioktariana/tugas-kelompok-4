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
            'label' => 'Jawaban A',
            'rules' => 'required'],

            ['field' => 'pilb',
            'label' => 'Jawaban B',
            'rules' => 'required'],

            ['field' => 'pilc',
            'label' => 'Jawaban C',
            'rules' => 'required'],

            ['field' => 'pild',
            'label' => 'Jawaban D',
            'rules' => 'required'],

            ['field' => 'pile',
            'label' => 'Jawaban E',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbkuesioner');
        $this->db->join('tbdimensi', 'tbkuesioner.id_dimensi = tbdimensi.id_dimensi');
        return $this->db->get()->result();
    }

    public function getById($id)
    {
        $this->db->select('*');
        $this->db->from('tbkuesioner');
        $this->db->join('tbdimensi', 'tbkuesioner.id_dimensi = tbdimensi.id_dimensi');
        $this->db->where('id_kuesioner', $id);
        return $this->db->get()->row();
    }

    public function save($pertanyaan)
    {
        return $this->db->insert($this->_table, $pertanyaan);
    }

    public function update($id_pertanyaan, $pertanyaan)
    {
        return $this->db->update($this->_table, $pertanyaan, ['id_kuesioner' =>  $id_pertanyaan]);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kuesioner" => $id));
    }

    public function getVariabels(){
        return array('komitmen pimpinan',
            'alokasi sumber daya',
            'unit pengelola teknologi',
            'kebijakan dan sistem insentif',
            'Renstra dan peta jalan',
            'Perencanaan dan pengorganisasian',
            'Pengadaan dan penerapan',
            'Pengelolaan dan pengembangan',
            'Pemantauan dan penilaian',
            'Dosen dan peneliti',
            'Mahasiswa, unsur pemilik dan pimpinan',
            'Manajemen, staf dan karyawan',
            'Peningkatan kualitas',
            'Efektivitas dan efisiensi',
            'Transparansi manajemen',
            'Utilitas sumber daya',
            'Transformasi organisasi',
            'Implementasi e-learning ',
            'Berbagai sumber daya',
            'Pendidikan terbuka',
            'Pangkalan data terpadu',
            'Jejaring internasional'
        );
    }
}