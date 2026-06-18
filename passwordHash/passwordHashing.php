<?php

$userPassword = "admin";
$hashPassword = password_hash($userPassword, PASSWORD_BCRYPT);

if(password_verify($userPassword, $hashPassword)){
    echo "Login Successful";
}else{
    echo "Login Failed";
}