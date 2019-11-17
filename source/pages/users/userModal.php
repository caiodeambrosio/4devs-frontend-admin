<?php 
  if(isset($_POST['id']) && !empty($_POST['id'])){
    updateUser($_POST);
  }else if(isset($_POST['id']) && empty($_POST['id'])){
    createUser($_POST);
  }
?>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modal-title" class="modal-title">Editar Usuário</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" class="form-horizontal" method="post" action="">
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

<script>
$(document).on("click", ".open-modal", function() {
  const modal_type = $(this).data("modal-type");
  if (modal_type === 'post') {
    $("#modal-title").text("Novo Usuário")
  } else if (modal_type === 'put') {
    $("#modal-title").text("Editar Usuário")
    $("#id").val($(this).data("id"))
    $("#name").val($(this).data("name"))
    $("#lastname").val($(this).data("lastname"))
    $("#email").val($(this).data("email"))
    $("#vat").val($(this).data("vat"))
    $("#status").val($(this).data("status"))
    $("#password").val($(this).data("password"))
  }
});

$("#modal-default").on("hidden.bs.modal", function() {
  $(this).find('form').trigger('reset');
})
</script>