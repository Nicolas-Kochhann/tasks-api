<?php

require_once "resolve_request.php";
header('Content-Type: application/json');

$data = resolve_request_into_json();

if(sizeof($_GET) === 0){
    require_once "config.php";

    $sql = "SELECT * FROM tasks";

    $result = $conn->query($sql);
    if($result){
        http_response_code(201);
        $response = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($response);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} 
else if(isset($_GET["id"])){
    require_once "config.php";

    $sql = "SELECT * FROM tasks WHERE id = ". intval($_GET["id"]);
    $result = $conn->query($sql);
    if($result){
        http_response_code(201);
        $response = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode($response);
    } else {
        http_response_code(500);
        echo json_encode(["error" => $conn->error]);
    }
} else {
    http_response_code(400);
    echo json_encode(["error" => "Request inválido"]);
}

?>