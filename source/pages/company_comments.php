<?php include './source/mocks/users.php'; ?>
<?php include './source/mocks/companies.php'; ?>
<?php include './source/mocks/comments.php'; ?>
<?php 
$url_company_id = $_GET['company_id'];
$company = '';
$company_comments = [];

  foreach ($companies as $key => $value){
    if($value['id'] == $url_company_id){
      $company = $value;
    }
  }

  foreach ($comments as $key => $value){
    if($value['company_id'] == $url_company_id){
      $comment = $value;
      foreach ($users as $key => $value){
      if($comment['user_id'] == $value['id']){
          $comment['user'] = $value;
        }
      }
      array_push($company_comments, $comment);
    }
  }
?>

<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?php echo $company['name']?></h3>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>Usuário</th>
              <th>Comentario</th>
              <th>Data</th>
              <th style="width: 15%">Açōes</th>
            </tr>
          </thead>
          <tbody>
            <?php
              for ($i=0; $i < count($company_comments); $i++) { 
                ?>
                <tr>
                  <td><?php echo $company_comments[$i]['id']?></td>
                  <td><?php echo $company_comments[$i]['user']['name']?></td>
                  <td><?php echo $company_comments[$i]['comment']?></td>
                  <td><?php echo $company_comments[$i]['data']?></td>
                  <td>
                    <button 
                      id="view"
                      type="button" 
                      class="btn btn-primary btn-sm" 
                      data-toggle="modal" 
                      data-target="#modal-default" 
                      data-username="<?php echo $company_comments[$i]['user']['name'] ?>"
                      data-comment="<?php echo $company_comments[$i]['comment'] ?>"
                    >
                      <i class="nav-icon fas fa-eye"></i>
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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 id="username" class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="comment"></p>
      </div>
      <div class="modal-footer justify-content-end">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).on("click", "#view", function () {
    const username = $(this).data("username")
    const comment = $(this).data("comment")
    $("#comment").html(comment)
    $("#username").html(username)
  });
</script>