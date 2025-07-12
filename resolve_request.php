<?php

// Extract and return request body json.
function resolve_request_into_json(){
    $request_body = file_get_contents("php://input");
    $data = json_decode($request_body);
    return $data;
}

?>