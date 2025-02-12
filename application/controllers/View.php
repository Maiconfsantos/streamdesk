<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != '1'){
			//redirect("/");
		}
	}

	
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


	public function politica_privacidade(){
		$this->load->template('view/politica_privacidade');
	}
}
?>