<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();

		if($this->session->userdata('logged_in') != '1'){
			redirect("/");
		}
	}

	public function index(){
		$usuario = $this->session->userdata('usuario');
		$this->load->model('Channel_model');
		$channels = $this->Channel_model->get_channels_user($usuario);


		$dados = array('channels' =>$channels,);
		

		$this->load->template('default/sidebar',$dados);
	}
}