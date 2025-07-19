<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - IT ITELH GROUP</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Logout</a>

    <h2>Announcements</h2>
    <p>(Here you can add your announcements manually for now)</p>

    <h2>Files</h2>
    <p>(Later, we’ll add file upload functionality)</p>

    <h2>Discussion</h2>
    <p>(Later, we’ll add comments/messages)</p>

</body>
</html>
