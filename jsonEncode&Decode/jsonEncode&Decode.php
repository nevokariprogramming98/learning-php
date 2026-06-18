<?php
echo "<pre>";

$userData = [
    "name" => "Lian",
    "job" => "programmer"
];

$json_encode_data = json_encode($userData);
print_r($json_encode_data);

echo "<br><br>";

$json_decode_data = json_decode($json_encode_data);
print_r($json_decode_data);