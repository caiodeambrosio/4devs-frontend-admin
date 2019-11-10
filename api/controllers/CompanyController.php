<?php include './api/request.php'; ?>

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
  
  function fetchUser($id){
    return call('GET', 'users/'.$id, array());
  }

  function createUser($data){
    try {
      return call('POST', 'users', $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
    
  }

  function updateUser($data){
    try {
      return call('PUT', 'users/'.$data['id'], $data);
    } catch (\Throwable $th) {
      print_r($th);
    }
  }

  function deleteUser($id){
    try {
      return call('DELETE', 'users/'.$id);
      window.location.replace("page name");
    } catch (\Throwable $th) {
      // print_r($th);
    }
  }

?>