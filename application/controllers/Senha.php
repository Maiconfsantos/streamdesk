<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Senha extends CI_Controller{

	public function esqueci_senha(){
		$this->load->model("User_model");
		$user = $this->User_model->get_user_by_email($_POST['email']);


		if($user){	
			$this->User_model->set_reset_password($user['id'],time());

			$user = $this->User_model->get_user_by_email($_POST['email']);

			$this->send_email_reset_senha($user['email'],$user['reset_password']);

			 $this->session->set_tempdata("success","Um email foi enviado para você com as intruções para resetar sua senha.",10);
			
		}
		else 
			$this->session->set_flashdata("error","Email não encontrado em nosso sistema");

		redirect(base_url());

	}


	public function send_email_reset_senha($email='0',$key='0'){

		$this->load->library('email');

		$this->email->set_mailtype("html");
		$this->email->set_newline("\r\n");

		$data = array(
			'key' => $key,
		);

		$mesg = $this->load->view('email/resetar_senha',$data,true);

		$this->email->to($email);
		$this->email->from('1905.no-reply@cnec.br','UNICNEC - Sistemas');
		$this->email->subject('UNICNEC: Resetar senha de acesso a sistemas');
		$this->email->message($mesg);

		//Send email 
		$this->email->send();

	}

	public function resetar_senha($key){
		$this->load->model("User_model");
		$user = $this->User_model->get_user_by_key($key);

		if($user){
			$dados = array('user' => $user, );
			$this->load->template('senha/resetar_senha',$dados);
		}
		else{
			$this->session->set_flashdata('error','Essa solicitação de alteração de senha não se encontra disponivel no momento');
			redirect(base_url());
		}


	}


	public function alterar_senha($user=0,$pass=0){

		if(!$_POST['new_pass_1']){
			$user = $_POST['user'];
			$pass = $_POST['senha'];
		}
		$this->load->model("User_model");
		$this->User_model->alterar_senha($user,md5($pass));
		$this->session->set_flashdata('success','Senha alterada com sucesso');
		redirect(base_url());
	}

	public function alterar_senha_solicitacao(){
		$this->load->model('User_model');
		$this->load->model('Login_model');

		$user= $this->Login_model->get_dados_user_login($_POST['usuario'],md5($_POST['pass']));

		if($user){
			$this->alterar_senha($user['id'],$_POST['new_pass_1']);
			$this->session->set_flashdata('success','Senha alterada com sucesso');
		}

		else
			$this->session->set_flashdata('error','Usuario ou Senha incorreto');

		redirect(base_url());
	}
}