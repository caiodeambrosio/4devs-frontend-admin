<?php include './api/controllers/CompanyController.php'; ?>
<?php include './source/pages/companies/companiesModal.php'; ?>
<?php include './source/shared/addButton.php'; ?>
<?php include './source/shared/deleteButton.php'; ?>
<?php $companies = fetch(); ?>
<?php 
if(isset($_GET['delete'])){
  deleteCompany($_GET['delete']);
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
              <th>Razão Social</th>
              <th>Email</th>
              <th>CNPJ</th>
              <th>Status</th>
              <th style="width: 15%">Açōes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i=0; $i < count($companies); $i++) { 
            ?>
            <tr>
              <td><?php echo $companies[$i]['id']?></td>
              <td><?php echo $companies[$i]['name']?></td>
              <td><?php echo $companies[$i]['email'] ?></td>
              <td><?php echo $companies[$i]['inscription_number'] ?></td>
              <td><span
                  class="badge <?php echo $companies[$i]['status'] === 'INATIVO' ? 'bg-danger' : 'bg-warning' ?>"><?php echo $companies[$i]['status']?></span>
              </td>
              <td>
                <button id="open-modal" type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                  data-target="#modal-default" data-id="<?php echo $companies[$i]['id'] ?>"
                  data-name="<?php echo $companies[$i]['name'] ?>"
                  data-lastname="<?php echo $companies[$i]['lastname'] ?>"
                  data-email="<?php echo $companies[$i]['email'] ?>" data-vat="<?php echo $companies[$i]['vat'] ?>"
                  data-status="<?php echo $companies[$i]['status'] ?>"
                  data-password="<?php echo $companies[$i]['password'] ?>" data-modal-type="put">
                  <i class="nav-icon fas fa-user-edit"></i>
                </button>
                <?php //echo deleteButton($companies[$i]['id']) ?>
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