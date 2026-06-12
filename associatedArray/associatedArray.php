<?php

// => (fat arrow)
// $user = [
//     "username" => "dev_mindset",
//     "email" => "mentor@gmail.com",
//     "age" => 27,
//     "is_admin" => true
// ];

// foreach ($user as $key => $value) {
//     # code...
//     #ucfirst()-> uppercase for first letter
//     // echo ucfirst($key) . ":" .$value ."<br>"; 
//     echo $key . ":" . $value . "<br>";
// }

$product = [
    'name' => 'iPhone 15 Pro',
    'price' => 1200,
    'category' => 'electronics',
    'in_stock' => true
];

echo "Product Name : " . $product['name']. "<br>";

echo "<hr>Product Details:<br>";
foreach($product  as $key => $value){
    echo $key . " : " . $value. "<br>";
};
echo "<br>";

$student = [
    'name' => 'Nevodeal',
    'age' => 27,
    'target_role' => "junior fullstack"
];

echo "Student Details : <br>";

echo "<hr>";

foreach ($student as $key => $value) {
    # code...
    echo "$key : $value <br>";
};
