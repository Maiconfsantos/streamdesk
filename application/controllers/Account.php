<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
	public function create($lg='en_us'){
		url_trasform();	

		$text = get_text('create_account',$lg);
		$this->load->template('account/create',$text);
	}

	public function new(){
		$this->load->model('User_model');

		$email = $_POST['email'];
		$name = $_POST['name'];
		$pass = $_POST['pass'];

		if (!$this->User_model->get_user_by_email($email)){
			$data = array(
			'email' => $email,
			'nome' => $name,
			'senha' => md5($pass),
			'status' => '0',
			'reset_password' => '0',
			);

			$this->User_model->create_account($data);

			$this->session->set_tempdata('success','Conta criada com sucesso',5);

			redirect(base_url());
		}

		else {
			$this->session->set_tempdata('error','Email já cadastrado',5);
			redirect(base_url().'Account/create');
		}

	}
}