<?php

session_start();

$userEmail = '';
$userPassword = '';
$checkValidation = [];
$loginError = '';

if(isset($_POST['loginBtn'])){
$userEmail = $_POST['userEmail'];
$userPassword = $_POST['userPassword'];

if(empty($userEmail)){
    $checkValidation['userEmail'] = 'User Email need to fill.';
}

if(empty($userPassword)){
    $checkValidation['userPassword'] = 'User Password need to fill.';
}

if(empty($checkValidation)){
    if(isset($_SESSION["registerData"])){
        if($userEmail === $_SESSION["registerData"]["email"] && password_verify($userPassword,$_SESSION["registerData"]["password"])){
            $_SESSION['status'] = true;
            header('Location:dashboard.php');
            exit();       
        }else{
            $loginError = "Password doesn't match. Try Again..";
        }
    }else{
        $loginError = "No register user found. Please register first.";
    }
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
</head>
<body>
    <?php 
    if(!empty($loginError)){
        echo "<small style='color:red;'>$loginError</small>";
    }
    ?>

    <form action="" method="post">
        Email: <br>
        <input type="email" id="" name="userEmail" value="<?php echo htmlspecialchars($userEmail); ?>"><br>
        <?php if(isset($checkValidation['userEmail'])) echo "<small style='color:red;'>{$checkValidation['userEmail']}</small>" ?><br>
        Password: <br>
        <input type="password" id="" name="userPassword"><br>
        <?php if(isset($checkValidation['userPassword'])) echo "<small style='color:red;'> {$checkValidation['userPassword']}</small>" ?><br>
        <input type="submit" value="Login" value="loginBtn" name="loginBtn">
    </form>
</body>
</html>