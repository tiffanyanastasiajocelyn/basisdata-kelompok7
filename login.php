<?php
require 'koneksi.php';

// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to check username and password
    $query_sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
    $result = pg_query($conn, $query_sql);

    // Check if login is successful
    if (pg_num_rows($result) > 0) {
        // Start a session and store user_id
        session_start();
        $_SESSION['user_id'] = $user_id; // Replace $user_id with the actual user_id
        // Redirect to the home page after successful login
        header('Location: index.php');
        exit();
    } else {
        // Display an error message if login fails
        echo "<center><h1>Username atau Password anda salah. Silakan coba login kembali.</h1><button><strong><a href='login.html'>Login</a></strong></button></center>";
    }
}
?>
