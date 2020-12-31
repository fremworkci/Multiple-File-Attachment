<?php
class Model1 extends CI_Model{
    public function upload($data = array()){
        // Insert Ke Database dengan Banyak Data Sekaligus
        return $this->db->insert_batch('image',$data);
    }

    function insert_model($name)
    {
    	$this->db->insert("login",array("name"=>$name));
    	return $this->db->insert_id();
    }
}
