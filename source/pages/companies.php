<?php include './source/mocks/companies.php'; ?>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Empresas Cadastradas</h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Empresa</th>
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
                  <td>
                    <span class="badge <?php echo $companies[$i]['status'] === 'INATIVO' ? 'bg-danger' : 'bg-warning' ?>">
                      <?php echo $companies[$i]['status']?>
                    </span>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-sm"><i class="nav-icon fas fa-user-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="nav-icon fas fa-edit"></i></button>
                    <a class="btn btn-warning btn-sm" href="index.php?page=company_comments&company_id=<?php echo $companies[$i]['id']?>"><i class="nav-icon fas fa-comments"></i></a>
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
