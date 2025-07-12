<?php

require_once "resolve_request.php";
$data = resolve_request_into_json();

if(isset($_GET[])){
    
}

//http_response_code(400);
//header('Content-Type: application/json');
//echo json_encode(['erro' => 'Dados inválidos']);

?>