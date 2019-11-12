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
		$this->load->model('Sistemas_model');
		$sistemas = $this->Sistemas_model->get_sistemas($usuario);


		$dados = array('sistemas' =>$sistemas,);
		
		$this->load->template('home/home',$dados);
	}
}