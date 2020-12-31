<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$this->load->view('home');
	}

	public function prosesUpload(){
		$this->load->model('Model1');//load model
		$jumlahData = count($_FILES['adhar']['name']);//adhar is my column name and 
		$name=$this->input->post("name");
		$insert_id=$this->Model1->insert_model($name);//ye alag table me store hoga or uska insert id return karga.
		for ($i=0; $i < $jumlahData ; $i++)
		{
			$_FILES['file']['name']     = $_FILES['adhar']['name'][$i];
			$_FILES['file']['type']     = $_FILES['adhar']['type'][$i];
			$_FILES['file']['tmp_name'] = $_FILES['adhar']['tmp_name'][$i];
			$_FILES['file']['size']     = $_FILES['adhar']['size'][$i];
			$config['upload_path']          = './img/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('file')){

				$fileData = $this->upload->data();
				// echo "<pre>";
				// print_r($fileData);
				// die();
				$uploadData[$i]['adhar'] = $fileData['file_name']; //insert file name
				$uploadData[$i]['path'] =$fileData["full_path"]; //insert file path
				 $uploadData[$i]['iid'] = $insert_id; //iid forign key
			}

		} // Penutup For
		if($insert_id)  //agar insert id milta hai tab ye chalega
		{
			$this->Model1->upload($uploadData);
		}
		
	}
}
https://crm.webkype.com/assists/support/7.jpg
