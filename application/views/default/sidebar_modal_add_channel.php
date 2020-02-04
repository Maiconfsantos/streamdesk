<div class="modal fade" id="adicionarCanal" tabindex="-1" role="dialog" aria-labelledby="adicionarCanal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Canal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php  echo(BASE_URL) ?>Canal/adicionar">
            <div class="form-group">
                <label for="canalNome">Nome do Canal</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="canalNome" 
                    placeholder="Canal"
                    name='canal'>
            </div>
            <div class="form-group">
                <label for="plataforma">Selecione a plataforma</label>
                <select class="form-control" id="plataforma" name='plataforma'>
                    <?php foreach($plataformas as $value):?>
                        <option value="<?php echo($value->id)?>">
                            <?php echo($value->nome)?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>

            <input type="hidden" name="url" value="<?php echo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]")?>" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
