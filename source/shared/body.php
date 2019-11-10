<div class="content-wrapper">
  <?php include './source/shared/navbar.php'?>
  <section class="content">
    <div class="container-fluid">
      <?php
        $page = isset($_GET['page']) ? $_GET['page'] : null;
        
        include './source/shared/warningError.php';
        
        switch ($page) {
            case 'dashboard':
            include './source/pages/dashboard/dashboard.php';
            break;
            case 'users':
            include './source/pages/users/users.php';
            break;
            case 'companies':
            include './source/pages/companies/companies.php';
            break;
            case 'company_comments':
            include './source/pages/company_comments.php';
            break;
            default:
            include './source/pages/dashboard/dashboard.php';
            break;
        }
      ?>
    </div>
  </section>
</div>