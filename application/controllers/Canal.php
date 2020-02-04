<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Canal extends CI_Controller{
    public function adicionar(){
        $this->load->model('Channel_model');
        $this->load->model('User_model');

        $nome = $_POST['canal'];
        $plataforma = $_POST['plataforma'];

        $channel = $this->Channel_model->get_channel($nome,$plataforma);
        $usuario = $this->session->userdata('usuario');

        if(!$channel){

            $data = array(
                'name' => $nome,
                'plataform' => $plataforma
            );

            $this->Channel_model->insert_channel($data);

            $channel = $this->Channel_model->get_channel($nome);
        }

        $usuario_canal = $this->User_model->get_canal($usuario,$channel['id']);

        if(!$usuario_canal){

            $data = array(
                'id_channel' => $channel['id'],
                'id_usuario' => $usuario
            );

            $this->User_model->insert_channel($data);
        }

        redirect($_POST['url']);

    }
}