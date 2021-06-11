<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	// public function __construct(){
	// 	parent::__construct();

	// 	if($this->session->userdata('status') != "login"){
	// 		redirect('login/login');
	// 	}
	// }

	public function index()
	{	
		$this->load->model('pasien_model');
		$data['pasien'] = $this->pasien_model->getAllData();
		$this->load->view('pasien/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('pasien_model');//load model
		$where = array('id' => $id);
		$this->pasien_model->delete(array('id'=>$id),'pasien');// query delete(delete from pasien where id = $id)
		redirect('pasien/index');


	}
	
	public function save(){
		$this->load->view('pasien/tambah_pasien');
	}

	public function add(){
		$this->load->model('pasien_model');
		$data['kode'] = $this->input->post('kode');
		$data['nama'] = $this->input->post('nama');
		$data['gender'] = $this->input->post('gender');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['email'] = $this->input->post('email');

		$this->pasien_model->save($data);
		return redirect('pasien/index');
	}

}
