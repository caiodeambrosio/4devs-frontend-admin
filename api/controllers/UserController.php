<?php include $_SERVER['DOCUMENT_ROOT'].'/4devs/4devs-frontend-admin/'.'api/request.php'; ?>
<?php 
  if($_POST){
    if(isset($_POST['delete'])){
      deleteUser($_POST);
    } else if(isset($_POST['id']) && !empty($_POST['id'])){
      updateUser($_POST);
    }else if(isset($_POST['id']) && empty($_POST['id'])){
      createUser($_POST);
    }
  } 

  function fetchUsers(){
    try {
      return call('GET', 'users');
    } catch (\Throwable $th) {
      return [];
    }
  }
  
  function fetchUser($id){
    return call('GET', 'users/'.$id, array());
  }

  function createUser($data){
    try {
      call('POST', 'users', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function updateUser($data){
    try {
      call('PUT', 'users/'.$data['id'], $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function deleteUser($data){
    try {
      call('DELETE', 'users/'.$data['id']);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function backToPage(){
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php?page=users');
    exit();
  }
?>