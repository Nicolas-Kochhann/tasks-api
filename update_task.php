<?php

require_once "resolve_request.php";
header('Content-Type: application/json');

$data = resolve_request_into_json();

if (isset($data->id) AND isset($data->title)){
    require_once "config.php";

    $sql = "UPDATE tasks SET title = ". $data->title ." WHERE id = ". $data->id;
    if($conn->query($sql) === TRUE){
        http_response_code(201);
        echo json_encode(["message" => "Tarefa atualizada com sucesso"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }

} 
else if (isset($data->id) AND isset($data->completed)){
    require_once "config.php";
   
    $sql = "UPDATE tasks SET completed = ". $data->completed ." WHERE id = ". $data->id;
    if($conn->query($sql) === TRUE){
        http_response_code(201);
        echo json_encode(["message" => "Tarefa atualizada com sucesso"]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }

} else {
    http_response_code(400);
    echo json_encode(["error" => "Request inválido"]);
}

?>