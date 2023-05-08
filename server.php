<?php
$string_value = file_get_contents("data.json");
$data_array = json_decode($string_value, true);

$response = [
    "results" => $data_array,
    "success" => true
];
header('Content-Type: application/json');
echo json_encode($response);
