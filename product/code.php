<?php
session_start();
include('../config/database.php');


// Chức năng đăng ký user
if (isset($_POST['registerUser'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');
    if (mysqli_num_rows($select_user) > 0) {
        $message[] = "User already exists";
    } else {
        mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$password')") or die('query failed');
        header('Location: index.php');
    }
}


// Chức năng đăng nhập user
if (isset($_POST['loginUser'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');
    if (mysqli_num_rows($select_user) > 0) {
        $fetch_user = mysqli_fetch_assoc($select_user);
        $_SESSION['user_id'] = $fetch_user['id'];
        header('Location: indexLogined.php');
    }
}
