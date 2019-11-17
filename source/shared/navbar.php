<?php 
include './source/utils/constants.php';
$page = isset($_GET['page']) ? $_GET['page'] : null;
$page_name = isset($page) ? $pages[$page] : null;
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <form id="logout_form" method="post" action="source/controllers/AdminController.php">
          <input type="hidden" name="logout" />
          <h6 class="float-right">
            Olá Caio Deambrosio |
            <button type="submit" style="
            background: none;
            color: #007bff;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
            ">Sair</a>
          </h6>
        </form>
      </div>
    </div>
  </div>
</div>
