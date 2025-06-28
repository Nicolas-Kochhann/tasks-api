<?php

if(isset($_SERVER[REQUEST_METHOD])){

    $method = $_SERVER[REQUEST_METHOD];

    if ($method === "POST"){
        header("location: create_task.php");
    } else if ($method === "GET"){
        header("location: get_task.php");
    } else if ($method === "PATCH"){
        header("location: update_task.php");
    }  else if ($method === "DELETE"){
        header("location: delete_task");
    } else {
        http_response_code(400);
    }

}

?>