<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	 function __construct(){
        parent::__construct();

        if($this->session->userdata('logged_in') == '1'){
        	redirect("/Home/");
        }
       
    }

	 public function index($lg='en_us'){

	 	url_trasform();	
	 	
	 	$text = get_text('login',$lg);
	 	$text_modal_forget = get_text('modal_forget_password',$lg);
	 	$text_modal_change = get_text('modal_change_password',$lg);

	 	$this->load->template('login/login.php', $text);
	 	$this->load->view('login/esqueceusenhamodal',$text_modal_forget);
	 	$this->load->view('login/alteraSenhaModal',$text_modal_change);
	 }

	 public function log_in(){

	 	$email = $_POST['email'];
	 	$pass = md5($_POST['senha']);

	 	$this->load->model('Login_model');

	 	$dados = $this->Login_model->get_dados_user_login($email, $pass);

	 	if(is_null($dados)){
	 		$this->session->set_tempdata("error","Usuário ou senha errada",3);
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