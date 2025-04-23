<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create uploads directory if it doesn't exist
$uploadDir = "uploads/";
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $file_path = "";
    
    // Define email variables first
    $to =  "webervishal@gmail.com";
    $subject = "New Contact Form Submission";

    // Handle file upload
    if(isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $file_name = time() . '_' . $_FILES['attachment']['name'];
        $file_path = $uploadDir . $file_name;
        
        move_uploaded_file($_FILES['attachment']['tmp_name'], $file_path);
        
        // Create attachment boundary
        $boundary = md5(time());
        
        // Email headers with attachment
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
        
        // Email body with attachment
        $email_body = "--$boundary\r\n";
        $email_body .= "Content-Type: text/html; charset=UTF-8\r\n";
        $email_body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
        $email_body .= "
            <html>
            <head>
                <title>New Contact Form Submission</title>
            </head>
            <body>
                <h3>New Contact Form Submission</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong><br>$message</p>
            </body>
            </html>
        \r\n";
        
        // Add attachment
        $file_content = file_get_contents($file_path);
        $file_content = chunk_split(base64_encode($file_content));
        
        $email_body .= "--$boundary\r\n";
        $email_body .= "Content-Type: application/octet-stream; name=\"".basename($file_path)."\"\r\n";
        $email_body .= "Content-Transfer-Encoding: base64\r\n";
        $email_body .= "Content-Disposition: attachment; filename=\"".basename($file_path)."\"\r\n\r\n";
        $email_body .= $file_content."\r\n";
        $email_body .= "--$boundary--";
    } else {
        // Regular headers and body for no attachment
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $email_body = "
            <html>
            <head>
                <title>New Contact Form Submission</title>
            </head>
            <body>
                <h3>New Contact Form Submission</h3>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Message:</strong><br>$message</p>
            </body>
            </html>
        ";
    }

    // Send email to admin
    $admin_mail_sent = mail($to, $subject, $email_body, $headers);

    // Send confirmation email to user
    $user_subject = "Thank you for your message";
    $user_headers = "From: bobbyudamala@gmail.com\r\n";
    $user_headers .= "MIME-Version: 1.0\r\n";
    $user_headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $user_email_body = "
        <html>
        <head>
            <title>Message Received</title>
        </head>
        <body>
            <h3>Thank you for contacting us!</h3>
            <p>Dear $name,</p>
            <p>We have received your message and will get back to you soon.</p>
            <p>Here's what you sent us:</p>
            <p><strong>Message:</strong><br>$message</p>
            <p>Best regards,<br>Your Team</p>
        </body>
        </html>
    ";

    $user_mail_sent = mail($email, $user_subject, $user_email_body, $user_headers);

    // Create table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS contacts (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        message TEXT NOT NULL,
        attachment_path VARCHAR(255),
        submit_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    $conn->query($sql);

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message, attachment_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $message, $file_path);

    if ($stmt->execute()) {
        if ($admin_mail_sent && $user_mail_sent) {
            echo "Message sent and stored successfully! Please check your email for confirmation.";
        } else {
            echo "Message stored in database but email sending failed.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>