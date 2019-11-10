<?php
  include './source/utils/constants.php';
  $page = isset($_GET['page']) ? $_GET['page'] : null;
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index.php" class="brand-link">
    <span class="brand-text font-weight-light">4Devs | Admin</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Caio Deambrosio</a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?page=dashboard"
            class="nav-link <?php echo ( $page === 'dashboard' || !isset($page))  ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=users" class="nav-link <?php echo $page === 'users' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Usuários
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=companies"
            class="nav-link  <?php echo ($page === 'companies' || $page === 'company_comments') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Empresas
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>