<?php function deleteButton($id){ ?>
<a class="btn btn-danger btn-sm" href="?page=users&delete=<?php echo $id?>">
  <i class="nav-icon fas fa-trash"></i>
</a>
<?php } ?>