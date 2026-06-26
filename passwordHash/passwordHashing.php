<?php

$db_password = "admin123";
$hashPassword = password_hash($db_password, PASSWORD_BCRYPT);

$login_attempt = "wrongpass";

if(password_verify($login_attempt, $hashPassword)){
    echo "Login Successful";
}else{
    echo "Login Failed";
}