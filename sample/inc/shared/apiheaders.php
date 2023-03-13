<?php
header('Content-Type: application/json; charset=utf-8');

function response($data,$message="Success",$statusCode=200){
    return json_encode([
        "status" => $statusCode,
        "message" => $message,
        "data" => $data
    ]);    
}

