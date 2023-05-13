<?php
$conn = mysqli_connect("localhost", "root", "root", "kuliah_rpl_semester2");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
