<?php

require_once "Curl.php";

$url = 'localhost/ClientPHP/system/server.php';
$curl = new Curl();
$response = $curl->get($url);
$ciphered_data = $response["data"]["data"];

$cmd = "java -jar DETABE.jar 2 '$ciphered_data'"; 


$salida = shell_exec($cmd);

echo "Reply From Server  :".$salida;