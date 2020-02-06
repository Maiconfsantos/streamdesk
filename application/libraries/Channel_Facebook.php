<?php

class Channel_Facebook{   

    function __construct($name='name'){
        $nome = 'nome';
        $this->$nome = $name;
    }

    function get_data(){


        $ch = curl_init("https://graph.facebook.com/v6.0/painkamirazer/picture");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = json_decode(curl_exec($ch));

        print_r($data);
        $data->data[0]->live = $this->check_live();

        return($data->data[0]);
    }

    function check_live(){
        $ch = curl_init("https://api.twitch.tv/helix/streams?user_login=". $this->nome);
		$params = array(
			'Client-ID: '.TWITCH_CLIENT_ID,
		);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = json_decode(curl_exec($ch));

        if($data->data){
            return true;
        }
        else return false;
    }
}

?>