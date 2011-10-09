<?php
$user=$_GET['user'];
header('Content-type: application/json');
echo httpRequest('http://api.angel.co/1/users/'.$user,"GET");

function httpRequest($url,$method, $body = NULL) {
 if (!$method) {
      $method = "GET";
    };

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    if ($body) {
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));   
    }

    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
  }

?>