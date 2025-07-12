<?php
header("Access-Control-Allow-Origin: * ");

if(isset($_SERVER["REQUEST_METHOD"])){

    $method = $_SERVER["REQUEST_METHOD"];

    if ($method === "POST"){
        require "create_task.php";
    } else if ($method === "GET"){
        require "get_task.php";
    } else if ($method === "PATCH"){
        require "update_task.php";
    }  else if ($method === "DELETE"){
        require "delete_task.php";
    } else {
        http_response_code(400);
    }

}

?>