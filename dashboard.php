<?php
require_once('connection.php');
session_start();
if ($_SESSION['username'] == null) {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/dashboard.css">

    <title>Dashboard</title>

	<style>
		/* Reset default styles */
body, h1, h2 {
    margin: 0;
    padding: 0;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

nav.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: #f5f5f5;
}

.logout-btn {
    color: #333;
    text-decoration: none;
}

.logout-btn:hover {
    color: #000;
}

/* Responsive styles */
@media (max-width: 600px) {
    .container {
        padding: 10px;
    }
}

	</style>
</head>

<body>
    <header>
        <nav class="navbar">
            <h1>Welcome to Dashboard <?php echo $_SESSION['username']; ?></h1>
            <a href="./index.php" class="logout-btn"><i class='bx bx-log-out'></i> Logout</a>
        </nav>
    </header>

    <div class="container">
        <h2>Dashboard Content</h2>
        <!-- Add your dashboard content here -->
    </div>

    <script src="js/dashboard.js"></script>
</body>

</html>
