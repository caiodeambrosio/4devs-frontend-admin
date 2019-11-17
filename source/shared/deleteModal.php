<?php function delete_modal($controller){ ?>
<div class="modal fade" id="modal-delete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="modal-title" class="modal-title">Deseja Excluir?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form" method="post" action="api/controllers/<?php echo $controller ?>.php">
        <div class=" modal-body">
          <input id="delete_id" name="id" class="form-control" type="hidden" />
          <p>Este registro não poderá ser recuperado.</p>
        </div>
        <div class="modal-footer justify-content-end">
          <button name="delete" type="submit" class="btn btn-danger">Excluir</button>
          <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).on("click", "#open-delete-modal", function() {
  $("#delete_id").val($(this).data("id"))
});

$("#modal-delete").on("hidden.bs.modal", function() {
  $(this).find('form').trigger('reset');
})
</script>
<?php } ?>
