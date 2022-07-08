<?php

####################
# CIPHERING 
####################

#the first charachter of the message indicates the task to perform:
    # 1=encrypt
    # 2=decrypt
$data = array("edad" => 20, "curp" => "XXXXXX");
$json_data = json_encode($data); 

$cmd = "java -jar DETABE.jar 1 '$json_data'"; 
$salida = shell_exec($cmd);

$response_data = array("data" => $salida, "status" => "ok");
echo json_encode($response_data);