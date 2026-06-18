<?php
echo "<pre>";

$userData = [
    "name" => "Lian",
    "age" => 27,
    "skills" => ["php","Vue","Mysql"]
];

$json_encode_data = json_encode($userData);
print_r($json_encode_data);

echo "<br><br>";

$json_decode_data = json_decode($json_encode_data, true); // associative array
print_r($json_decode_data["skills"][0]);