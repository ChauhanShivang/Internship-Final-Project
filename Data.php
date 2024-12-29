<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['name'])) {
    header("Location: 3D Form.html");
    exit();
}

// Display user data
echo "<h1>Welcome, " . htmlspecialchars($_SESSION['name']) . "</h1>";
echo "<p>Email: " . htmlspecialchars($_SESSION['email']) . "</p>";
echo "<p>Mobile: " . htmlspecialchars($_SESSION['mobile']) . "</p>";
echo "<p>PIN: " . htmlspecialchars($_SESSION['pin']) . "</p>";

// Logout
echo '<form action="logout.php" method="post">
        <input type="submit" value="Logout">
      </form>';
?>