<?php include $_SERVER['DOCUMENT_ROOT'].'/4devs/4devs-frontend-admin/'.'source/utils/request.php'; ?>
<?php 
  if($_POST){
    if(isset($_POST['delete'])){
      deleteAdmin($_POST);
    } else if(isset($_POST['id']) && !empty($_POST['id'])){
      updateAdmin($_POST);
    }else if(isset($_POST['id']) && empty($_POST['id'])){
      createAdmin($_POST);
    }else if(isset($_POST['login'])){
      login($_POST);
    }else if(isset($_POST['logout'])){
      logout();
    }
  } 

  function fetchAdmins(){
    try {
      return call('GET', 'admins');
    } catch (\Throwable $th) {
      return [];
    }
  }
  
  function fetchAdmin($id){
    return call('GET', 'admins/'.$id, array());
  }

  function createAdmin($data){
    try {
      call('POST', 'admins', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function updateAdmin($data){
    try {
      call('PUT', 'admins/'.$data['id'], $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function deleteAdmin($data){
    try {
      call('DELETE', 'admins/'.$data['id']);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function login($data){
    try {
      $response = call('POST', 'login', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    
    session_start();
    if(!isset($response['error'])){
      $_SESSION['user'] = $response;
      unset($_SESSION['login_error']);
    }else{
      $_SESSION['login_error'] = true;
    }
    
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php');
      exit();
  }
  function logout(){
    session_start();
    unset($_SESSION['user']);
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php');
    exit();
  }

  function backToPage(){
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php?page=admins');
    exit();
  }
?>