<!DOCTYPE html>
<html>

<?php 
  session_start();
 $_SESSION['connection_error'];
 ?>

<?php include './source/shared/head.html'; ?>
<?php include './source/shared/scripts.html'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include './source/shared/aside.php'; ?>
    <?php include './source/shared/body.php'; ?>
    <?php include './source/shared/footer.html'; ?>
  </div>
</body>

</html>
