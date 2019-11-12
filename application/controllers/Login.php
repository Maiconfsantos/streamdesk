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

	 	$this->load->template('login/login.php');
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