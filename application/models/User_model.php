<?php

class User_model extends CI_model{

	public function get_user_by_email($email){

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		return $this->db->get()->row_array();
	}

	public function get_user_by_key($key){

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('reset_password',$key);
		return $this->db->get()->row_array();
	}


	public function set_reset_password($id,$key){
		$this->db->set('reset_password',$key);
		$this->db->where('id',$id);
		$this->db->update('usuarios');
	}

	public function alterar_senha($id,$pass){
		$this->db->set('reset_password',0);
		$this->db->set('senha',$pass);
		$this->db->where('id',$id);
		$this->db->update('usuarios');
	}


	

}