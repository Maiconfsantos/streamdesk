<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function template($nome, $dados = array()) {
        $this->view('default/header.php');
        $this->view($nome,$dados);
        $this->view('default/footer.php');
      }
}

?>
