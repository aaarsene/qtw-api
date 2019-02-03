<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

include_once '../utilities/designs.php';

$images = get_current_designs();

http_response_code(200);

echo json_encode($images);
