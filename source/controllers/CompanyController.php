<?php include $_SERVER['DOCUMENT_ROOT'].'/4devs/4devs-frontend-admin/'.'source/utils/request.php'; ?>
<?php 
  if($_POST){
    if(isset($_POST['delete'])){
      deleteCompany($_POST);
    } else if(isset($_POST['id']) && !empty($_POST['id'])){
      updateCompany($_POST);
    }else if(isset($_POST['id']) && empty($_POST['id'])){
      createCompany($_POST);
    }
  } 

  $baseUrl = "companies";

  function fetch(){
    global $baseUrl;
    try {
      return call('GET', $baseUrl);
    } catch (\Throwable $th) {
      return [];
    }
  }
  
  function fetchCompany($id){
    return call('GET', 'companies/'.$id, array());
  }
  
  function createCompany($data){
    try {
      call('POST', 'companies', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();    
  }

  function updateCompany($data){
    try {
      call('PUT', 'companies/'.$data['id'], $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function deleteCompany($data){
    try {
      call('DELETE', 'companies/'.$data['id']);
    } catch (\Throwable $th) {
      print_r($th);
    }
    backToPage();
  }

  function backToPage(){
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php?page=companies');
    exit();
  }

?>
