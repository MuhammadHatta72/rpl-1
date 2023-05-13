<?php
session_start();
if ($_POST['logout']) {
    if ($_POST['logout'] == true) {
        session_unset(["message", "user_login"]);
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        header("Location: dashboard.php");
        exit;
    }
}
