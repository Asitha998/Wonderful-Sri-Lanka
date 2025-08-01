<?php
session_start();
require "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

$rs = Database::search("SELECT * FROM users INNER JOIN roles ON users.role_id = roles.id WHERE email='$email'");
if ($rs->num_rows === 1) {
    $user = $rs->fetch_assoc();

    if (password_verify($password, $user["password_hash"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["name"] = $user["name"];
        $_SESSION["role_id"] = $user["role_id"];

        echo "<script>window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Invalid Credentials.'); window.location.href='../login.php';</script>";
    }
} else {
    echo "<script>alert('User not found.'); window.location.href='../login.php';</script>";
    exit;
}
