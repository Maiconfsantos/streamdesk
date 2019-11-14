<div class="modal fade" id="esqueceuSenhaModal" tabindex="-1" role="dialog" aria-labelledby="esqueceuSenhaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="chamafichaModal"><?php echo($forget_password)?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url()?>Senha/esqueci_senha" method='Post'>
        <div class="modal-body">
            <div class="form-group">
              <label for="Email"><?php echo($email)?></label>
              <input type="email" class="form-control" id="email" name="email" required="true">
              <small id="emailHelp" class="form-text text-muted"><?php echo($email_tip)?></small>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo($close_buttom)?></button>
          <button type="submit" class="btn btn-primary"><?php echo($request_password_buttom)?></button>
        </div>
      </form>
    </div>
  </div>
</div>