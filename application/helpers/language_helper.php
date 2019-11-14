<?php


function base_data(){

	$data = array(
		'supported_language' =>['pt_br','en_us'],
	);

	return $data;
}


function url_trasform(){

	if ($_SERVER['PHP_SELF'] == '/sd/index.php'
    		|| $_SERVER['PHP_SELF'] == '/index.php'){
        	redirect($base_url.'/Login/index');
        }
    else{
	    $base_data = base_data();
		$supported_language = $base_data['supported_language'];

		$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

		$lg = substr($_SERVER['PHP_SELF'], -5);
		$lg = strtolower(str_replace('-','_',$lg));

		if(!in_array($lg, $supported_language)){
			$lg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5);
			$lg = strtolower(str_replace('-','_',$lg));
			if(in_array($lg, $supported_language)){
				redirect($url.'/'.$lg);
			}
			else{
				redirect($url.'/en_us');
			}
		}
	}



}


function get_text($page,$lg){
	$base_data = base_data();
	$supported_language = $base_data['supported_language'];

	$ci = get_instance();

	if(!in_array($lg, $supported_language)) $lg='en_us';

	$ci->load->library($lg);

	$base_text = $ci->$lg->text();

	$text_page = $page($base_text);

	return($text_page);
}


function login($base_text){
	$data = array(
		'login_button' => $base_text['login-button'],
		'email' => $base_text['email'],
		'email_tip' => $base_text['email_tip'],
		'pass' => $base_text['pass'],
		'pass_tip' => $base_text['pass_tip'],
		'forget_password' => $base_text['forget_password'],
		'change_password' => $base_text['change_password'],
		'create_account' => $base_text['create_account'],
	);

	return $data;
}


function modal_forget_password($base_text){
	$data = array(
		'forget_password' => $base_text['forget_password'],
		'email_tip' => $base_text['email_tip'],
		'email' => $base_text['email'],
		'close_buttom' => $base_text['close_buttom'],
		'request_password_buttom' => $base_text['request_password_buttom'],
	);

	return $data;
}


function modal_change_password($base_text){
	$data = array(
		'change_password' => $base_text['change_password'],
		'user' => $base_text['user'],
		'user_tip' => $base_text['user_tip'],
		'pass' => $base_text['pass'],
		'actual_pass_tip' => $base_text['actual_pass_tip'],
		'new_pass' => $base_text['new_pass'],
		'new_pass_tip' => $base_text['new_pass_tip'],
		'new_pass_again_tip' => $base_text['new_pass_again_tip'],
		'close_buttom' => $base_text['close_buttom'],

	);

	return $data;
}

function create_account($base_text){
	$data = array(
		'email' => $base_text['email'],
		'new_email_tip' => $base_text['new_email_tip'],
		'close_buttom' => $base_text['close_buttom'],
		'create_accounte_buttom' => $base_text['create_accounte_buttom'],
		'full_name' => $base_text['full_name'],
		'full_name_tip' => $base_text['full_name_tip'],
		'user' => $base_text['user'],
		'user_tip' => $base_text['user_tip'],
		'pass' => $base_text['pass'],
		'pass_tip' => $base_text['pass_tip'],
		'pass_again_tip' => $base_text['pass_again_tip'],
		'not_equal_password_warning' => $base_text['not_equal_password_warning'],
		

	);

	return $data;
}

?>