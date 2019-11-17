<?php 
  if(isset($_POST['id']) && !empty($_POST['id'])){
    updateCompany($_POST);
  }else if(isset($_POST['id']) && empty($_POST['id'])){
    createCompany($_POST);
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
      <form id="form" method="post" action="">
        <div class="modal-body">
          <input id="id" name="id" class="form-control" type="hidden" />
          <div class="form-group">
            <label>Nome</label>
            <input id="name" name="name" class="form-control" required />
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <input id="description" name="description" class="form-control" required />
          </div>
          <div class="form-group">
            <label>CNPJ</label>
            <input id="inscription_number" name="inscription_number" class="form-control" required />
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input id="email" name="email" class="form-control" required />
          </div>
          <div class="form-group">
            <label>Status</label>
            <select id="status" name="status" class="form-control" required>
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
$(document).on("click", "#open-modal", function() {
  const modal_type = $(this).data("modal-type");
  if (modal_type === 'post') {
    $("#modal-title").text("Novo Empresa")
  } else if (modal_type === 'put') {
    $("#modal-title").text("Editar Empresa")

    $("#id").val($(this).data("id"))
    $("#name").val($(this).data("name"))
    $("#description").val($(this).data("description"))
    $("#email").val($(this).data("email"))
    $("#inscription_number").val($(this).data("subscription-number"))
    $("#status").val($(this).data("status"))
  }
});

$("#modal-default").on("hidden.bs.modal", function() {
  $(this).find('form').trigger('reset');
})
</script>