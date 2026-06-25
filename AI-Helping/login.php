<?php 
session_start(); 

$userEmail = "";
$userPassword = "";
$checkValidation = [];
$loginError = "";

if (isset($_POST["login-btn"])) {
    $userEmail = trim($_POST["email"]);
    $userPassword = $_POST["password"];

    if (empty($userEmail)) {
        $checkValidation["email"] = "Email is required.";
    }
    if (empty($userPassword)) {
        $checkValidation["password"] = "Password is required.";
    }

    // Process if there are no validation structural errors
    if (empty($checkValidation)) {
        if (isset($_SESSION["registerData"])) {
            if ($userEmail === $_SESSION["registerData"]['email'] && password_verify($userPassword, $_SESSION["registerData"]['password'])) {
                $_SESSION["status"] = true;    
                header("Location: dashboard.php");
                exit();
            } else {
                $loginError = "Passwords do not match our records. Try Again.";
            }
        } else {
            $loginError = "No registered user found. Please register first.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <?php if (!empty($loginError)): ?>
        <p style="color: red; font-weight: bold;"><?php echo $loginError; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo htmlspecialchars($userEmail); ?>"><br> 
        <?php if (isset($checkValidation["email"])): ?>
            <small style="color: red;"><?php echo $checkValidation["email"]; ?></small><br>
        <?php endif; ?>

        <label>Password:</label><br>
        <input type="password" name="password"><br> 
        <?php if (isset($checkValidation["password"])): ?>
            <small style="color: red;"><?php echo $checkValidation["password"]; ?></small><br>
        <?php endif; ?>
        <br>
        <input type="submit" value="Log In" name="login-btn">
    </form>
</body>
</html>