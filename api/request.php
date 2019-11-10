<?php include './source/utils/enviroments.php'; ?>
<?php 
  
  function call($method, $url, $data = array()){
    $curl = curl_init();
    switch ($method){
      case "POST":
      curl_setopt($curl, CURLOPT_POST, 1);
      if ($data) curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
      break;
      case "PUT":
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
      if ($data){
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
      } 
      break;
      case "DELETE":
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
      break;
      default:
      if ($data)
        getApiUri().$url = sprintf("%s?%s", getApiUri().$url, http_build_query($data));
    }
    setOpt($curl, $url);
    return sendRequest($curl);
  }

  function setOpt($curl, $url){
    curl_setopt($curl, CURLOPT_URL, getApiUri().$url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
    ));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  }
  
  function sendRequest($curl){
    $result = curl_exec($curl);
    if(!$result){ 
      $_SESSION['connection_error'] = true;
      throw new Exception('Falha na Conexão'); 
    }
    $_SESSION['connection_error'] = false;
    curl_close($curl);
    return json_decode($result, 1);
  }

?>