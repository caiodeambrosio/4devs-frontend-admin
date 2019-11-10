<?php include './source/mocks/users.php' ?>
<?php include './source/mocks/companies.php' ?>
<?php include './source/mocks/comments.php' ?>

<?php $qtd_users = count($users)?>
<?php $qtd_companies = count($companies)?>
<?php $qtd_comments = count($comments)?>

<div class="row">
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>
          <?php echo $qtd_users ?>
        </h3>
        <p>Usuários</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo $qtd_companies ?></h3>
        <p>Empresas</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-medkit"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo $qtd_comments ?></h3>
        <p>Comentários</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-star"></i>
      </div>
    </div>
  </div>
</div>
<!-- Main row -->
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <?php include './source/pages/dashboard/recentComments.php' ?>
  </section>
</div>
