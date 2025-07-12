<?php

require_once "resolve_request.php";
header('Content-Type: application/json');

$data = resolve_request_into_json();

if (isset($data->title)){
    require_once "config.php";

    $sql = "INSERT INTO tasks(title) VALUES('". $data->title ."')";
    if($conn->query($sql) === TRUE){
        http_response_code(201);
        echo json_encode(["message" => "Tarefa inserida com sucesso", "id" => $conn->insert_id]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Request inválido"]);
}

?>