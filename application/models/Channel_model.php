<?php

class Channel_model extends CI_model{

	public function get_channels_user($user){
		$this->db->select('c.*')
				 ->from('channel as c')
				 ->join('usuarios_channel as uc','uc.id_channel = c.id','inner')
				 ->join('usuarios as u','u.id = uc.id_usuario','inner')
				 ->where('u.id',$user);
		return $this->db->get()->result_array();
	}

	public function get_channel($id){
		$this->db->select('*')
				 ->from('channel')
				 ->where('id',$id);
		return $this->db->get()->row_array();
	}
}