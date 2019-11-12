<div class="modal fade" id="alteraSenhaModal" tabindex="-1" role="dialog" aria-labelledby="alteraSenhaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="alteraSenhaModal">Alterar minha senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url()?>Senha/alterar_senha_solicitacao" method='Post'>
        <div class="modal-body">
            <div class="form-group">
              <label for="usuario">Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required="true">
              <small id="usuariolHelp" class="form-text text-muted">Informe o seu usuario</small>
            </div>

            <div class="form-group">
              <label for="pass">Senha Atual</label>
              <input type="password" class="form-control" id="pass" name="pass" required="true">
              <small id="passHelp" class="form-text text-muted">Informe a sua senha atual</small>
            </div>

            <div class="form-group">
              <label for="new_pass_1">Nova senha</label>
              <input type="password" class="form-control" id="new_pass_1" name="new_pass_1" required="true">
              <small id="new_pass_1lHelp" class="form-text text-muted">Informe a sua nova senha</small>
            </div>

             <div class="form-group">
              <label for="new_pass_2">Nova senha</label>
              <input type="password" class="form-control" id="new_pass_2" name="new_pass_2" required="true">
              <small id="new_pass_2Help" class="form-text text-muted">Informe a sua nova senha novamente</small>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Alterar senha</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  var password = document.getElementById("new_pass_1")
  , confirm_password = document.getElementById("new_pass_2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas não conferem");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>
