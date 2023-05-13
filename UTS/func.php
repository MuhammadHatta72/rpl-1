<?php
require "configurasi.php";
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row['username'] === "user") {
            $_SESSION['message'] = "Berhasil login !";
            $_SESSION['user_login'] = "User";
            header("Location: dashboard.php");
            exit;
        } elseif ($row['username'] === "admin") {
            $_SESSION['message'] = "Berhasil login !";
            $_SESSION['user_login'] = "Admin";
            header("Location: dashboard.php");
            exit;
        } else {
            $_SESSION['message'] = "Gagal Login, Silahkan ulangi lagi !";
            header("Location: index.php");
            exit;
        }
    } else {
        $_SESSION['message'] = "Gagal Login, Silahkan ulangi lagi !";
        header("Location: index.php");
        exit;
    }
}
