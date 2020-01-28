<?php

class Channel_Twitch{
    

    function __construct($name='name'){
        $nome = 'nome';
        $this->$nome = $name;
    }

    function get_data(){
        $ch = curl_init("https://api.twitch.tv/helix/users?login=". $this->nome);
		$params = array(
			'Client-ID: 2lpi7xfzdpz99dayhy7w2d74jeotbi',
		);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = json_decode(curl_exec($ch));
        

        return($data->data[0]);
    }
}

?>