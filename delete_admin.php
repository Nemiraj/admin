<?php
include 'db.php';

// Delete all admins logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_all'])) {
    $conn->query("DELETE FROM admins");
    header("Location: list_admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete All Admins</title>
</head>
<body>
    <h2>Delete All Admins</h2>
    <form method="post">
        <button type="submit" name="delete_all" onclick="return confirm('Are you sure you want to delete all admins?')">Delete All</button>
    </form>
    <a href="index.php">Go Back</a>
</body>
</html>
