<div class="modal fade" id="esqueceuSenhaModal" tabindex="-1" role="dialog" aria-labelledby="esqueceuSenhaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chamafichaModal">Esqueci minha senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url()?>Senha/esqueci_senha" method='Post'>
        <div class="modal-body">
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required="true">
              <small id="emailHelp" class="form-text text-muted">Informe o seu email vinculado ao sistema</small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Solictar senha</button>
        </div>
      </form>
    </div>
  </div>
</div>