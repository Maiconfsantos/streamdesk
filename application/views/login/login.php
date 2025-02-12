<link rel="stylesheet" type="text/css" href="<?=css_url()?>custom/login.css">

<div class="container" >
	<div class="row justify-content-center">
		<div class="col-11 col-lg-6" id="area-login">
     		 <img id='logo_central' src="<?=asset_url()?>/imgs/logo.jpg" />

         <!--
     		 <button onclick="alert2()" id="button-login" type="button" class="btn btn-danger btn-lg btn-block">Acesso com o email Institucional</button>
        -->

        <form method="post" action="<?=base_url()?>Login/log_in">
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="email"><?php echo($email)?></label>
                  <input type="text" class="form-control" id="email" aria-describedby="email" name='email' placeholder="<?php echo($email_tip)?>">
              </div>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="senha"><?php echo($pass)?></label>
                  <input type="password" class="form-control" id="senha" aria-describedby="senha" name='senha' placeholder="<?php echo($pass_tip)?>">
              </div>
            </div>
          </div>

          <div class="row justify-content-md-center">
            <div class="col-md-12 col-lg-6" id='divbutton'>
              <button type="submit" class="btn btn-primary"><?php echo($login_button)?></button>
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
        <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#esqueceuSenhaModal"><?php echo($forget_password)?></button>
      </div>
      <div class="col-md-6 col-lg-3" id='divbutton'>
        <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#alteraSenhaModal"><?php echo($change_password)?></button>
      </div>
    </div>
  
     		 <div id='footer' class="footer-copyright text-center py-3"><a href='<?=base_url()?>Account/create'><?php echo($create_account)?></a>
        </div>

    	</div>
	</div>
</div>


