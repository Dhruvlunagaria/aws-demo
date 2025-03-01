<?php
include 'config.php';
$result = $conn->query("SELECT name FROM users");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="mb-3">Enter Your Name</h2>
    <form action="add.php" method="post">
        <input type="text" name="name" class="form-control mb-2" required>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h3 class="mt-4">Stored Names:</h3>
    <ul class="list-group">
        <?php while ($row = $result->fetch_assoc()): ?>
            <li class="list-group-item"><?php echo htmlspecialchars($row['name']); ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
<?php $conn->close(); ?>
