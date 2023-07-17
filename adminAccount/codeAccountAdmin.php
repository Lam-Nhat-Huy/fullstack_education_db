<?php
session_start();
include('./config.php');
include('../config/functions.php');



// Đăng Ký Tài Khoản Admin
if (isset($_POST['saveUser'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $password_repeat = mysqli_real_escape_string($conn, md5($_POST['password_repeat']));

    $select = mysqli_query($conn, "SELECT * FROM `admin` WHERE email='$email' AND password='$password'");
    if (mysqli_num_rows($select) > 0) {
        echo "<script>alert('Tài đã tồn tại');</script>";
    } else {
        mysqli_query($conn, "INSERT INTO `admin` (name, email, password) VALUES ('$name', '$email', '$password')");
        header('Location: login.php');
    }
}

//Đăng Nhập Tài Khoản Admin
if (isset($_POST['loginUser'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));


    $select = mysqli_query($conn, "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('Location: ../../../admin/model/index.php');
    } else {
        redirect('login.php', 'Tên tài khoản hoặc mật khẩu không đúng');
    }
}
