<?php
include 'db.php';

// Add admin logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_admin'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
        $stmt = $conn->prepare("INSERT INTO admins (name) VALUES (?)");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->close();
        header("Location: list_admin.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Admin</title>
</head>
<body>
    <h2>Add New Admin</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Enter Admin Name" required>
        <button type="submit" name="add_admin">Add Admin</button>
    </form>
    <a href="index.php">Go Back</a>
</body>
</html>
