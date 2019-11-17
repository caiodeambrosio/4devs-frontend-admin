<?php function modal_save_and_update($controller){ ?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modal-title" class="modal-title">Editar Usuário</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" method="post" action="source/controllers/<?php echo $controller ?>.php">
        <div class="modal-body">
          <input id="id" name="id" class="form-control" type="hidden" />
          <div class="form-group">
            <label>Nome</label>
            <input id="name" name="name" class="form-control" />
          </div>
          <div class="form-group">
            <label>Sobrenome</label>
            <input id="lastname" name="lastname" class="form-control" />
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input id="email" name="email" class="form-control" />
          </div>
          <div class="form-group">
            <label>CPF</label>
            <input id="vat" name="vat" class="form-control" />
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input id="password" name="password" type="password" class="form-control" />
          </div>
          <div class="form-group">
            <label>Status</label>
            <select id="status" name="status" class="form-control">
              <option value="ATIVO">Ativo</option>
              <option value="INATIVO">Inativo</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-end">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>
