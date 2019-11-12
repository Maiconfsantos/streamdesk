<?php

class Sistemas_model extends CI_model{

	public function get_sistemas($user){

		$this->db->select('s.*');
		$this->db->from('sistemas_usuario as su');
		$this->db->join('sistemas as s','s.id = su.id_sistema');
		$this->db->where('su.id_usuario',$user);
		return $this->db->get()->result_array();
	}
}