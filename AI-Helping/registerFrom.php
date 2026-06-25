<?php
session_start();

$userName = '';
$userEmail = '';
$checkValue = [];

if (isset($_POST['registerbtn'])) {
    $userName = trim($_POST['userName']);
    $userEmail = trim($_POST['userEmail']);
    $userPassword = $_POST['userPassword'];
    $userConfirmPassword = $_POST['userConfirmPassword'];

    if (empty($userName)) {
        $checkValue["userName"] = "Name Field is required.";
    }
    if (empty($userEmail)) {
        $checkValue["userEmail"] = "Email Field is required.";
    }
    if (empty($userPassword)) {
        $checkValue["userPassword"] = "Password Field is required.";
    }
    if (empty($userConfirmPassword)) {
        $checkValue["userConfirmPassword"] = "Confirm Password Field is required.";
    }
    if (!empty($userPassword) && !empty($userConfirmPassword) && ($userPassword !== $userConfirmPassword)) {
        $checkValue["match"] = "Passwords do not match.";
    }

    if (empty($checkValue)) {
        $_SESSION["registerData"] = [
            'name' => $userName,
            'email' => $userEmail,
            'password' => password_hash($userPassword, PASSWORD_BCRYPT) 
        ];

        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="loginForm">
        <form action="" method="post">
            <label>Name:</label><br>
            <input type="text" name="userName" value="<?php echo htmlspecialchars($userName); ?>"> <br> 
            <?php if(isset($checkValue['userName'])) echo "<small style='color:red;'>{$checkValue['userName']}</small><br>"; ?> 
            <br>

            <label>Email:</label><br>
            <input type="email" name="userEmail" value="<?php echo htmlspecialchars($userEmail); ?>"> <br> 
            <?php if(isset($checkValue['userEmail'])) echo "<small style='color:red;'>{$checkValue['userEmail']}</small><br>"; ?> 
            <br>

            <label>Password:</label><br>
            <input type="password" name="userPassword"> <br> 
            <?php if(isset($checkValue['userPassword'])) echo "<small style='color:red;'>{$checkValue['userPassword']}</small><br>"; ?> 
            <br>

            <label>Confirm Password:</label><br>
            <input type="password" name="userConfirmPassword"><br> 
            <?php if(isset($checkValue['userConfirmPassword'])) echo "<small style='color:red;'>{$checkValue['userConfirmPassword']}</small><br>"; ?>
            <?php if(isset($checkValue['match'])) echo "<small style='color:red;'>{$checkValue['match']}</small><br>"; ?> 
            <br>

            <input type="submit" name="registerbtn" value="Register">
        </form>
    </div>
</body>
</html>