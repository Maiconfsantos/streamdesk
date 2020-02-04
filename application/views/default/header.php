<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/header.css">

        <script src="<?=base_url()?>js/jquery.js"></script>
        <script src="<?=js_url()?>login.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       

        <script data-ad-client="ca-pub-5877486646197736" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    </head>

    <body>

     <?php 


    if($this->session->flashdata("success")){

        echo("<script> 
                swal('Sucesso', '".$this->session->flashdata('success')."', 'success')
            </script>");
    }

    if($this->session->tempdata("success")){

        echo("<script> 
                swal('Sucesso', '".$this->session->tempdata('success')."', 'success')
            </script>");
    }

     if($this->session->tempdata("error")){

        echo("<script> 
                swal('Erro', '".$this->session->tempdata('error')."', 'error')
            </script>");
    }


    if($this->session->flashdata("error")){

        echo("<script> 
                swal('Erro', '".$this->session->flashdata('error')."', 'error')
            </script>");
    }


    ?>

    <nav class="navbar navbar-dark bg-dark">
  <a id='text-navbar' class="navbar-brand" href="#" align="center">
    <img src="<?=asset_url()?>/imgs/logo-cnec-transparente.png") " class="d-inline-block align-top" alt="">
    Stream Desk</a>

    <form action="<?=base_url()?>Logout" class="form-inline my-2 my-lg-0">
      <button id='logoutbutton' class="btn btn-outline-light my-2 my-sm-0" type="submit">logout</button>
    </form>
</nav>
