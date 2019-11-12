<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	 function __construct(){
        parent::__construct();

        if($this->session->userdata('logged_in') == '1'){
        	redirect("/Home/");
        }
    }

	 public function index(){

	 	if(base_url()=='http://appdev.facos.edu.br/Login/'){
	 		$dados = array('ClientID' => '40171611764-5lnh5eer1omaeju4qlqm20m62bfiotp5.apps.googleusercontent.com');
	 	}
		else if(base_url()=='http://app.facos.edu.br/Login/'){
	 		$dados = array('ClientID' => '523930581034-ush2bdn5t5tjtismrrco6b7figpe1ukf.apps.googleusercontent.com');
	 	}

	 	$this->load->template('login/login.php',$dados);
	 	$this->load->view('login/esqueceusenhamodal');
	 	$this->load->view('login/alteraSenhaModal');
	 }

	 public function log_in(){

	 	$user = $_POST['usuario'];
	 	$pass = md5($_POST['senha']);

	 	$this->load->model('Login_model');

	 	$dados = $this->Login_model->get_dados_user_login($user, $pass);

	 	if(is_null($dados)){
	 		$this->session->set_flashdata("error","Usuário ou senha errada");
					redirect('/');
	 	}

	 	else{
	 		$newdata = array(
			        'usuario'  => $dados['id'],
			        'logged_in' => TRUE,
				);

			$this->session->set_userdata($newdata);
	 		redirect("/Home/");
	 	}
	 }

	 public function log_in_email(){

	 	$email = $_POST['email'];


	 	$this->load->model('Login_model');

	 	$dados = $this->Login_model->get_dados_user_login_email($email);

	 	//exit($dados);

	 	if(is_null($dados)){
	 		$this->session->set_tempdata("error","Email não localizado",1);
					redirect('/');
	 	}

	 	else{
	 		$newdata = array(
			        'usuario'  => $dados['id'],
			        'logged_in' => TRUE,
				);

			$this->session->set_userdata($newdata);
	 		redirect("/Home/");
	 	}
	 }

}