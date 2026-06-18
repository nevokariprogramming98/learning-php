<?php

function divide($num1, $num2){
    if($num2 == 0){
        throw new Exception("Divided by Zero...");
    }

    echo $num1 / $num2;
}

try{
    divide(8,0);
}catch(Exception $error){
    echo $error;
}

echo "<br>The End";