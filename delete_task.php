<?php

require_once "resolve_request.php";
header('Content-Type: application/json');

$data = resolve_request_into_json();

if(isset($_GET['id'])){
    require_once "config.php";

    $sql = "DELETE FROM tasks WHERE id = ". intval($_GET['id']);
    if($conn->query($sql) === TRUE){
        http_response_code(201);
        echo json_encode(["message" => "Tarefa removida com sucesso"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Request inválido"]);
}

?>