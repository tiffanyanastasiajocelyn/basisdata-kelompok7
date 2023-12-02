<?php
require 'koneksi.php';

$fullname = $_POST["fullname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if (strlen($password) < 8) {
    echo "<center><h1>Password harus memiliki panjang minimal 8 karakter.</h1><button><strong><a href='register.html'>Back</a></strong></button></center>";
} else {
   
    $query_check_unique = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result_check_unique = pg_query($conn, $query_check_unique);

    if (pg_num_rows($result_check_unique) > 0) {
        echo "<center><h1>Username atau Email sudah digunakan. Silakan coba dengan yang lain.</h1><button><strong><a href='register.html'>Back</a></strong></button></center>";
    } else {
        
        $query_insert = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname', '$username', '$email','$password')";

        if (pg_query($conn, $query_insert)) {
            header("Location: login.html");
        } else {
            echo "Pendaftaran Gagal : " . pg_error($conn);
        }
    }
}
?>
