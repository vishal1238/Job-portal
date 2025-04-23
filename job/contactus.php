<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("sql207.infinityfree.com", "if0_38769664", "u7vGdi2J0lwEo7", "if0_38769664_job_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO messages (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql)) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
