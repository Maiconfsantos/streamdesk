<div  class="container">
	<form action="<?php echo base_url()?>Senha/alterar_senha" method='Post'>
        <div class="modal-body">
            <div class="form-group">
              <label for="senha">Nova senha</label>
              <input type="password" class="form-control" id="senha" name="senha" required="true">
              <small id="emailHelp" class="form-text text-muted">Defina a sua nova senha</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="user" name="user" value ="<?php echo($user['id'])?>" required="true" hidden>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Alterar Senha</button>
        </div>
      </form>
</div>