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

	public function create_account($data){
		$this->db->insert('usuarios', $data);
	}

	public function get_channels($user){
		$this->db->select('c.*')
				 ->from('channel as c')
				 ->join('usuarios_channel as uc','uc.id_channel = c.id','inner')
				 ->join('usuarios as u','u.id = uc.id_usuario','inner')
				 ->where('u.id',$user);
		return $this->db->get()->result_array();
	}


	

}