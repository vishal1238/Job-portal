
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    if (isset($_POST["submit"])) {
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeat_password"];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();

        if (empty($fullName) || empty($email) || empty($password) || empty($repeatPassword)) {
            array_push($errors, "All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
        }
        if (strlen($password) < 8) {
            array_push($errors, "Password must be at least 8 characters long");
        }
        if ($password !== $repeatPassword) {
            array_push($errors, "Passwords do not match");
        }

        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        
        if ($rowCount > 0) {
            array_push($errors, "Email already exists!");
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo "<script>alert('$error');</script>";
            }
        }else {
            $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<script>alert('Registration successful');</script>";
            } else {
                echo "<script>alert('Something went wrong');</script>";
            }
        }

    }
    ?>

    <div class="login-container">
        <form action="registration.php" method="POST" class="login-form">
            <h2>Register</h2>
            <div class="form-group">
                <input type="text" name="fullname" required>
                <label>Full Name</label>
            </div>
            <div class="form-group">
                <input type="email" name="email" required>
                <label>Email</label>
            </div>
            <div class="form-group password-field">
                <input type="password" name="password" id="password" required>
                <label>Password</label>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            
            <div class="form-group">
                <input type="password" name="repeat_password" required>
                <label>Repeat Password</label>
            </div>
            <button type="submit" class="login-btn" name="submit">Register</button>
            <p>Already registered? <a href="login.php" style="color: #fff202;">Login Here</a></p>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
        }
    </script>
</body>
</html>