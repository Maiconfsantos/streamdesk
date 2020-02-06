<?php

class Channel_Facebook{   

    function __construct($name='name'){

        $nome = 'display_name';
        $this->$nome = $name;

        $login = 'login';
        $this->$login = $name;
    }


    function get_data(){

        $fb = new Facebook\Facebook([
            'app_id' => '462971241004562',
            'app_secret' => 'e3fca6e744432da10c7b7e8f2e10d02c',
            'default_graph_version' => 'v2.10',
            ]);
        

        $accessToken = new Facebook\Authentication\AccessToken('462971241004562|e3fca6e744432da10c7b7e8f2e10d02c');
        
        $token = (string) $accessToken;

        try {
            // Returns a `FacebookFacebookResponse` object
            $response = $fb->get(
              "/$this->display_name/picture",
              $token
            );
          } catch(FacebookExceptionsFacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
          } catch(FacebookExceptionsFacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
          }
          $graphNode = $response->getHeaders();

          $imagem = 'profile_image_url';
          $this->$imagem = $graphNode['location'];

          ini_set('user_agent', 'Netscape');
          ini_set('HTTP_ACCEPT_LANGUAGE', 'pt-br');

          $html = file_get_contents("https://www.facebook.com/$this->display_name/videos");
          
          $online = 'live';
          if(strpos($html, 'Ao vivo')){
            $this->$online = true;
          }
          else $this->$online = false;
    }


   
}

?>