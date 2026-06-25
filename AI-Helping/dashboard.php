<?php 
session_start(); 

// 1. Run auth check BEFORE any HTML is rendered
if (!isset($_SESSION["registerData"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    header("Location: login.php");
    exit(); // Stop executing immediately
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome From Dashboard</h1>
    <p>You are securely logged in.</p>
    
    <a href="delete.php">Logout</a>
</body>
</html>