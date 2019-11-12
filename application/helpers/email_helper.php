<?php

function initializeEmail(){

  $ci = get_instance();

  $ci->load->library("email");
  $config["protocol"] = "smtp";
  $config["smtp_host"] = "ssl://smtp.gmail.com";
  $config["smtp_user"] = "maiconfsanto@gmail.com";
  $config["smtp_pass"] = "Pokemon@10";
  $config["charset"] = "utf-8";
  $config["mailtype"] = "html";
  $config["newline"] = "\r\n";
  $config["smtp_port"] = '465';
  $ci->email->initialize($config);
}

function sendEmail($to,$subject,$message,$attach){

  $ci = get_instance();

  $ci->email->from("codeigniteralura@gmail.com", "Money Plus");
  $ci->email->to($to);
  $ci->email->subject($subject);
  $ci->email->message($message);

  foreach ($attach as $key => $file) {
    $ci->email->attach($file);
  }
  
  $ci->email->send();
}

?>
