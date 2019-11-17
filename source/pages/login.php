<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>4</b>DEVS</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Faça o login para iniciar a sessão</p>

      <form action="source/controllers/AdminController.php" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Senha">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <?php if(isset($_SESSION['login_error'])){ ?>
        <p class="login-box-msg" style="color:red">
          <b>Usuário ou Senha incorretos!</b>
        </p>
        <?php } ?>
        <button name="login" type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
      </form>
      </d iv>
    </div>
</body>
