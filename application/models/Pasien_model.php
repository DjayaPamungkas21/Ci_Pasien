<?php

class Pasien_model extends CI_Model{

    public $id;
    public $nama;
    public $kode;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;

    public function getAllData(){

        //select * from pasien
       $query = $this->db->get('pasien');
       return $query;
    }

    public function findById($id){
        //select * from pasien where id = id;
       $query = $this->db->get_where('pasien',['id'=>$id]);
       return $query->row();
    }

    public function delete($where,$table){
        // delete * from pasien where id = 1
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function save($data){
        //this->db->insert('nama_tabel',data)
        return $this->db->insert('pasien',$data);
    }

    

}

?>