<?php

class Login_model extends CI_model{

	public function get_dados_user_login($email,$pass){

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		$this->db->where('senha',$pass);
		return $this->db->get()->row_array();
	}

	public function get_dados_user_login_email($email){

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email',$email);
		return $this->db->get()->row_array();
	}

}