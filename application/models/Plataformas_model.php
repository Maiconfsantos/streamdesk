<?php

class Plataformas_model extends CI_model{
    public function get_plataformas(){
        $this->load->library('Plataforma');
        $plat = array ();

        $plataformas =  $this->db
                            ->select('*')
                            ->from('plataform')
                            ->get()->result_array();
        
        foreach($plataformas as $key => $plataforma){
            array_push($plat,new Plataforma($plataforma['name'], $plataforma['id']));
        }

        return $plat;
    }
}