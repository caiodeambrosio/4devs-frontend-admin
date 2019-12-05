<?php if(isset($_SESSION['connection_error']) && $_SESSION['connection_error']){ ?>
<div class="callout callout-danger" style="background-color:#dd4b39; color: white">
  <h4>Que pena!</h4>

  <p>Estamos sem conexão.</p>
</div>
<?php } ?>
