<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Facebook extends CI_Controller{
    public function index(){

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
              '/painkamirazer/picture',
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

          ini_set('user_agent', 'Netscape');

            $html = file_get_contents('https://www.facebook.com/corinnakopff/videos');
            
            if(strpos($html, 'Ao vivo')){
                echo('on');
            }
            else echo('off');
            
    }


    public function teste_library(){
        $this->load->library('Channel_Facebook');


        $channel = new Channel_Facebook('painkamirazer');
        $data = $channel->get_data();

        print_r($channel);
    }
}

?>

