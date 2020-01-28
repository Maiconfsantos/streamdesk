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
		$this->load->helper('sidebar_helper');
		prep_sidebar();
	}
}