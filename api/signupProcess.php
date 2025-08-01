<?php
require "connection.php";

$name = $_POST["signupName"];
$email = $_POST["signupEmail"];
$phone = $_POST["signupPhone"];
$password = $_POST["signupPassword"];

$rs = Database::search("SELECT * FROM users WHERE email='$email'");
if ($rs->num_rows > 0) {
    echo "<script>alert('Email already registered.'); window.location.href='../login.php';</script>";
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$role_rs = Database::search("SELECT id FROM roles WHERE name='user'");
$role_id = $role_rs->fetch_assoc()["id"];

Database::iud("INSERT INTO users (name, email, password_hash,phone, role_id) 
               VALUES ('$name', '$email', '$hashedPassword','$phone', $role_id)");

echo "<script>alert('Signup successful! Please log in. $name, $phone, $email, $password'); window.location.href='../login.php';</script>";
