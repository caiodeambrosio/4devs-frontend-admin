<!DOCTYPE html>
<html>

<?php include './source/shared/head.html'; ?>
<?php include './source/shared/scripts.html'; ?>
<?php 
if(!isset($_SESSION['user_admin'])){
  include './source/pages/login.php';
}else{
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include './source/shared/aside.php'; ?>
    <?php include './source/shared/body.php'; ?>
    <?php include './source/shared/footer.html'; ?>
  </div>
</body>
<?php
}
 ?>




</html>