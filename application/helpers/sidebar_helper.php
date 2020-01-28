<?php

function prep_sidebar(){
    $ci = get_instance();

    $ci->load->library('Channel_Twitch');
	$ci->load->model('User_model');

    $usuario = $ci->session->userdata('usuario');
    $channels = $ci->User_model->get_channels($usuario);
    
    
    $ativo = array();
    $inativo = array();

    foreach($channels as $key => $channel){
        $ct[$key] = new Channel_Twitch($channel['name']);
        $ct[$key] = $ct[$key]->get_data();

        if($ct[$key]->live)
            array_push($ativo, $ct[$key]);
        else
            array_push($inativo, $ct[$key]);
    }

    $dados = array(
        'inativos' => $inativo,
        'ativos' => $ativo,
    );

    $ci->load->template('default/sidebar',$dados);
}

?>