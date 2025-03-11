<?php
include 'db.php';

// Fetch admins
$result = $conn->query("SELECT * FROM  admins");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin List</title>
</head>
<body>
    <h2>Admin List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['name']); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="index.php">Go Back</a>
</body>
</html>
