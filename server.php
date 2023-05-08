<?php
$string_value = file_get_contents("data.json");
$data_array = json_decode($string_value, true);
if (isset($_GET["selectedOne"])) {
    $response = [
        "results" => $data_array[$_GET["selectedOne"]],
        "success" => true
    ];
} else {

    $response = [
        "results" => $data_array,
        "success" => true
    ];
}
header('Content-Type: application/json');
echo json_encode($response);
