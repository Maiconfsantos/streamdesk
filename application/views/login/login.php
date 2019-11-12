<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/login.css">
<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>
<meta name="google-signin-client_id" content="<?php echo($ClientID)?>">


<div class="container" >
	<div class="row justify-content-center">
		<div class="col-11 col-lg-6" id="area-login">
     		 <img id='logo_central' src="<?=asset_url()?>/imgs/logo-cnec-grande.png" />

         <!--
     		 <button onclick="alert2()" id="button-login" type="button" class="btn btn-danger btn-lg btn-block">Acesso com o email Institucional</button>
        -->

        <form method="post" action="<?=base_url()?>Login/log_in">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="usuario">Usuário</label>
                  <input type="text" class="form-control" id="usuario" aria-describedby="usuario" name='usuario' placeholder="Digite o seu usuário">
              </div>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" aria-describedby="senha" name='senha' placeholder="Digite a sua senha">
              </div>
            </div>
          </div>

          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6" id='divbutton'>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
      </form>

    <div class="row justify-content-md-center">
      <div class="col-md-12 col-lg-6">
       <div class="g-signin2" data-longtitle="true"  data-theme= 'dark', data-onsuccess="onSignIn"></div>
      </div>
    </div>

    <div class="row justify-content-md-center">
      <div class="col-md-6 col-lg-3" id='divbutton'>
        <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#esqueceuSenhaModal">Esqueceu a senha</button>
      </div>
      <div class="col-md-6 col-lg-3" id='divbutton'>
        <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#alteraSenhaModal">Alterar Senha</button>
      </div>
    </div>
   



     		 <div id='footer' class="footer-copyright text-center py-3">© 2019 UNICNEC Osório:
      <a href="http://educacaosuperior.cnec.br/osorio"> educacaosuperior.cnec.br</a>
    </div>

    	</div>
	</div>
</div>


