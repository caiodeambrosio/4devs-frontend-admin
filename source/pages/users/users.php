<?php include './api/controllers/UserController.php'; ?>
<?php include './source/pages/users/userModal.php'; ?>
<?php include './source/shared/addButton.php'; ?>
<?php include './source/shared/deleteButton.php'; ?>
<?php $users = fetchUsers(); ?>
<?php 
if(isset($_GET['delete'])){
  deleteUser($_GET['delete']);
} 
?>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card">
      <div class="card-header">
        <?php echo addButton() ?>
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
              for ($i=0; $i < count($users); $i++) { 
            ?>
            <tr>
              <td><?php echo $users[$i]['id']?></td>
              <td><?php echo $users[$i]['name'] . ' ' . $users[$i]['lastname']?></td>
              <td><?php echo $users[$i]['email'] ?></td>
              <td><span
                  class="badge <?php echo $users[$i]['status'] === 'INATIVO' ? 'bg-danger' : 'bg-warning' ?>"><?php echo $users[$i]['status']?></span>
              </td>
              <td>
                <button id="edit-modal" type="button" class="open-modal btn btn-primary btn-sm" data-toggle="modal"
                  data-target="#modal-default" data-id="<?php echo $users[$i]['id'] ?>"
                  data-name="<?php echo $users[$i]['name'] ?>" data-lastname="<?php echo $users[$i]['lastname'] ?>"
                  data-email="<?php echo $users[$i]['email'] ?>" data-vat="<?php echo $users[$i]['vat'] ?>"
                  data-status="<?php echo $users[$i]['status'] ?>" data-password="<?php echo $users[$i]['password'] ?>"
                  data-modal-type="put">
                  <i class="fas fa-user-edit"></i>
                </button>
                <?php echo deleteButton($users[$i]['id']) ?>
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