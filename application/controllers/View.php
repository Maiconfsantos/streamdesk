<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller{
	public function channel($name){
		$this->load->library('Channel_Twitch');
		$this->load->model('User_model');
		$this->load->model('Channel_model');

		$usuario = $this->session->userdata('usuario');

		$channels = $this->User_model->get_channels($usuario);
		$channel = $this->Channel_model->get_channel($name);
		

		foreach($channels as $key => $channel_2){
			$ct[$key] = new Channel_Twitch($channel_2['name']);
			$ct[$key] = $ct[$key]->get_data();


		}

		

		$dados = array('channels' =>$ct,);
		$this->load->template('default/sidebar',$dados);


		$dados = array(
			'channel' => $channel
		);


		$this->load->view('view/channel',$dados);
	}
}
?>