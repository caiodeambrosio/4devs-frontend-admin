<?php include './source/controllers/AdminController.php'; ?>
<?php include './source/pages/admins/adminModal.php'; ?>
<?php include './source/shared/deleteModal.php'; ?>
<?php $admins = fetchAdmins(); ?>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card">
      <div class="card-header">
        <h2 class="m-0 text-dark">Administradores
          <button id="open-add-modal" type="button" class="open-modal btn btn-sm btn-success float-right"
            data-toggle="modal" data-target="#modal-default" data-modal-type="post">
            <i class="nav-icon fas fa-plus"></i>
            Novo
          </button>
        </h2>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Status</th>
              <th style="width: 15%">Açōes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i=0; $i < count($admins); $i++) { 
            ?>
            <tr>
              <td><?php echo $admins[$i]['id']?></td>
              <td><?php echo $admins[$i]['name'] . ' ' . $admins[$i]['lastname']?></td>
              <td><?php echo $admins[$i]['email'] ?></td>
              <td><span
                  class="badge <?php echo $admins[$i]['status'] === 'INATIVO' ? 'bg-danger' : 'bg-warning' ?>"><?php echo $admins[$i]['status']?></span>
              </td>
              <td>
                <button type="button" class="open-modal btn btn-primary btn-sm" data-toggle="modal"
                  data-target="#modal-default" data-id="<?php echo $admins[$i]['id'] ?>"
                  data-name="<?php echo $admins[$i]['name'] ?>" data-lastname="<?php echo $admins[$i]['lastname'] ?>"
                  data-email="<?php echo $admins[$i]['email'] ?>" data-vat="<?php echo $admins[$i]['vat'] ?>"
                  data-status="<?php echo $admins[$i]['status'] ?>"
                  data-password="<?php echo $admins[$i]['password'] ?>" data-modal-type="put">
                  <i class="fas fa-user-edit"></i>
                </button>
                <button id="open-delete-modal" type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                  data-target="#modal-delete" data-id="<?php echo $admins[$i]['id'] ?>">
                  <i class="nav-icon fas fa-trash"></i>
                </button>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>
<?php modal_save_and_update('AdminController'); ?>
<?php delete_modal('AdminController'); ?>

<script>
$(document).on("click", ".open-modal", function() {
  const modal_type = $(this).data("modal-type");
  if (modal_type === 'post') {
    $("#modal-title").text("Novo Administrador")
  } else if (modal_type === 'put') {
    $("#modal-title").text("Editar Administrador")
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
