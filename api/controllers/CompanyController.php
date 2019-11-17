<?php include $_SERVER['DOCUMENT_ROOT'].'/4devs/4devs-frontend-admin/'.'api/request.php'; ?>
<?php if($_POST){
  if(isset($_POST['delete'])){
    deleteCompany();
  }
} ?>

<?php
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
      console.log($data);
      return call('POST', 'companies', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    
  }

  function updateCompany($data){
    try {
      return call('PUT', 'companies/'.$data['id'], $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
  }

  function deleteCompany(){
    try {
      call('DELETE', 'companies/'.$_POST['id']);
    } catch (\Throwable $th) {
      // print_r($th);
    }
    header('Location: http://localhost:81/4devs/4devs-frontend-admin/index.php?page=companies');
    exit();
  }

?>
