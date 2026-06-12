<?php

// => (fat arrow)
$user = [
    "username" => "dev_mindset",
    "email" => "mentor@gmail.com",
    "age" => 27,
    "is_admin" => true
];

foreach ($user as $key => $value) {
    # code...
    #ucfirst()-> uppercase for first letter
    // echo ucfirst($key) . ":" .$value ."<br>"; 
    echo $key . ":" . $value . "<br>";
}

