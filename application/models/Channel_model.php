<?php

class Channel_model extends CI_model{

	public function get_channel($name){
		$this->db->select('*')
				 ->from('channel')
				 ->where('name',$name);
		return $this->db->get()->row_array();
	}

	public function insert_channel($data){
		$this->db->insert('channel', $data);
	}

}