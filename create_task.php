<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "resolve_request.php";

$data = resolve_request_into_json();

http_response_code(400);
header('Content-Type: application/json');
echo json_encode(['erro' => 'Dados inválidos']);

?>