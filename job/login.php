<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if ($user) {
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user["full_name"];
                header("Location: index2.php");
                die();
            }
             else {
                echo "<div class='alert alert-danger' style='color: white; text-align: center; margin-bottom: 10px;'>Password does not match</div>";
            }
        } else {
            echo "<div class='alert alert-danger' style='color: white; text-align: center; margin-bottom: 10px;'>Email does not match</div>";
        }
    }
    ?>
    <div class="login-container">
        <form action="login.php" method="POST" class="login-form">
            <h2>Login</h2>
            <div class="form-group">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <button type="submit" class="login-btn" name="login">Login</button>
            <p>Not registered yet <a href="registration.php" style="color: #fff202;">Register Here</a></p>
        </form>
    </div>
</body>

</html>