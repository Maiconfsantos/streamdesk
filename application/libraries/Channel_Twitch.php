<?php

class Channel_Twitch{
    

    function __construct($name='name'){
        $nome = 'display_name';
        $this->$nome = $name;

        $login = 'login';
        $this->$login = $name;
    }

    function get_data(){

        $ch = curl_init("https://api.twitch.tv/helix/users?login=". $this->login);
		$params = array(
			'Client-ID: '.TWITCH_CLIENT_ID,
		);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = json_decode(curl_exec($ch));

        $imagem = 'profile_image_url';
        $this->$imagem = $data->data[0]->profile_image_url;
        
        $this->check_live();

    }

    function check_live(){
        $ch = curl_init("https://api.twitch.tv/helix/streams?user_login=". $this->login);
		$params = array(
			'Client-ID: '.TWITCH_CLIENT_ID,
		);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $test_live = json_decode(curl_exec($ch));

        $online='live';
        if(empty($test_live->data)){
            $this->online =  false;
        }
        else $this->online = true;
        
    }
}

?>