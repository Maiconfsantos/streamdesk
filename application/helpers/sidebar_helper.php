<?php

function prep_sidebar(){
    $ci = get_instance();

    $ci->load->library('Channel_Twitch');
    $ci->load->library('Channel_Facebook');
    $ci->load->model('User_model');
    $ci->load->model('Plataformas_model');

    $usuario = $ci->session->userdata('usuario');
    $channels = $ci->User_model->get_channels($usuario);
    $plataformas = $ci->Plataformas_model->get_plataformas();
    
    $ativo = array();
    $inativo = array();

    foreach($channels as $key => $channel){

        if($channel['plataform']=='1'){
            $ct[$key] = new Channel_Twitch($channel['name']);
            $ct[$key] = $ct[$key]->get_data();

            if($ct[$key]->live)
                array_push($ativo, $ct[$key]);
            else
                array_push($inativo, $ct[$key]);
        }

        if($channel['plataform']=='3'){
            $cf[$key] = new Channel_Facebook($channel['name']);
            $cf[$key] = $cf[$key]->get_data();

            if($cf[$key]->live)
                array_push($ativo, $cf[$key]);
            else
                array_push($inativo, $cf[$key]);
        }
        
    }

    $dados = array(
        'inativos' => $inativo,
        'ativos' => $ativo,
    );

    $dados2 = array(
        'plataformas' => $plataformas
    );

    $ci->load->template('default/sidebar',$dados);
    $ci->load->view('default/sidebar_modal_add_channel',$dados2);
}

?>