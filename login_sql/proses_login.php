<?php
session_start();

include '../config/koneksi.php';

    $email      = $_POST['email'];
    $pass       = md5($_POST['password']);
    $query      = mysqli_query($conn,"SELECT * FROM tb_login WHERE email = '$email' AND password = '$pass'");
    $row        = mysqli_num_rows($query);
    $ray        = mysqli_fetch_array($query);
    // $namapelogin = $ray['username'];
    
    if ($row > 0) {
        // $_SESSION['username']  = $namapelogin;
        $_SESSION['email'] = $email;
        $_SESSION['status'] = 'login';
        header('location:../admin/index.php');
    }else{
        header('location:../Auth.php?pesan=gagal');
    }