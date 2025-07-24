<?php
require_once 'config.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM resume WHERE id=1";
$result = $conn->query($sql);
$resume = [
    'name' => 'Your Name',
    'email' => 'your.email@example.com',
    'education' => 'Your Education Details',
    'experience' => 'Your Work Experience',
    'skills' => 'Your Skills'
];
if ($result && $row = $result->fetch_assoc()) {
    $resume = $row;
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">My Website</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin/index.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-5">
    <h1>My Resume</h1>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($resume['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($resume['email']); ?></p>
    <p><strong>Education:</strong> <?php echo nl2br(htmlspecialchars($resume['education'])); ?></p>
    <p><strong>Experience:</strong> <?php echo nl2br(htmlspecialchars($resume['experience'])); ?></p>
    <p><strong>Skills:</strong> <?php echo nl2br(htmlspecialchars($resume['skills'])); ?></p>
    <!-- Add more resume details as needed -->
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 