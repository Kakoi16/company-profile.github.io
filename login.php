<?php
session_start();

// Simulasi validasi dengan username dan password yang benar
$valid_username = "admin";
$valid_password = "1234";

// Mendapatkan data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Proses pengecekan login
if ($username === $valid_username && $password === $valid_password) {
    // Set session untuk menyimpan informasi login
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    
    // Redirect ke halaman index.html
    header("Location: dashboard.html");
    exit();
} else {
    // Tampilkan pesan error jika login gagal
    echo "<h2>Login failed. Invalid username or password.</h2>";
    echo "<a href='login.html'>Try again</a>";
}
?>