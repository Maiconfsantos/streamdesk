<?php
function autoriza() {

    $ci = get_instance();

   if($ci->session->userdata('logged_in')){
	 		return ($ci->session->userdata('id'));
	 	}

	 	else {
	 		$ci->session->set_flashdata("error","Usuário não logado");
	 		redirect('http://sys2.facos.edu.br/acio/');
	 	}
}
?>
