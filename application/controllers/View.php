<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller{
	public function channel($name){
		$this->load->model('Channel_model');
		$this->load->helper('sidebar_helper');

		prep_sidebar();

		$channel = $this->Channel_model->get_channel($name);
		$dados = array(
			'channel' => $channel
		);

		$this->load->view('view/channel',$dados);
	}


	public function help(){
		$this->load->template('view/help');
	}
}
?>