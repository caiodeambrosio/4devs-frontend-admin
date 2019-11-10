<?php 
include './source/utils/constants.php';
$page = isset($_GET['page']) ? $_GET['page'] : null;
$page_name = isset($page) ? $pages[$page] : null;
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?php echo $page_name ?></h1>
      </div>
    </div>
  </div>
</div>
