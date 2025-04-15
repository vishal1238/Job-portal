<?php
$conn = new mysqli("localhost", "root", "", "job_portal");

if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM job_submissions ORDER BY submitted_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
  <title>All Job Submissions</title>
  <style>
    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .job-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 20px;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
    }
    .job-card img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      border-radius: 10px;
      margin-right: 20px;
      border: 1px solid #ddd;
    }
    .job-details h3 {
      margin: 0;
      color: #ab183d;
    }
    .job-details p {
      margin: 5px 0;
    }
  </style>
</head>
<body>

<h1>All Submitted Job Listings</h1>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='job-card'>";
        echo "<img src='" . htmlspecialchars($row['company_logo']) . "' alt='Logo'>";
        echo "<div class='job-details'>";
        echo "<h3>" . htmlspecialchars($row['job_role']) . " at " . htmlspecialchars($row['company_name']) . "</h3>";
        echo "<p><strong>Type:</strong> " . htmlspecialchars($row['job_type']) . "</p>";
        echo "<p><strong>Description:</strong> " . nl2br(htmlspecialchars($row['job_description'])) . "</p>";
        echo "<p><strong>Salary:</strong> ₹" . htmlspecialchars($row['salary']) . "</p>";
        echo "<p><strong>Submitted by:</strong> " . htmlspecialchars($row['user_email']) . "</p>";
        echo "<p><strong>Submitted on:</strong> " . $row['submitted_at'] . "</p>";
        echo "</div></div>";
    }
} else {
    echo "<p>No job submissions yet.</p>";
}

$conn->close();
?>

</body>
</html>
