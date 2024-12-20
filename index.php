<?php
session_start();

// Redirect logged-in users directly to the coffee tracker
if (isset($_SESSION['username'])) {
    header("Location: coffee-tracker.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Counter</title>
    <link rel="stylesheet" href="style.css">
	
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
	<link rel="manifest" href="/favicon_io/site.webmanifest">
</head>
<body>
    <!-- Landing Page -->
    <header>
        <h1>Welcome to Coffee Counter</h1>
        <p>Track your coffee consumption like a pro!</p>
    </header>
    <main>
        <p>
            Ever wondered how much coffee you drink every day? <br>
            Use our Coffee Counter to track your caffeine habits, and take control of your daily coffee intake.
        </p>
        <div class="button-group">
            <a id="btn-primary" href="login.php" class="btn">Login</a>
            <a id="btn-secondary" href="register.php" class="btn">Register</a>
        </div>
    </main>
</body>
</html>