<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller{
	public function channel($id){
		$this->load->model('Channel_model');
		$usuario = $this->session->userdata('usuario');

		$channels = $this->Channel_model->get_channels_user($usuario);
		$dados = array('channels' =>$channels,);
		$this->load->template('default/sidebar',$dados);


		$channel = $this->Channel_model->get_channel($id);

		$dados = array(
			'channel' => $channel
		);

		$this->load->view('view/channel',$dados);
	}
}
?>