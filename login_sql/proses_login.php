<?php
session_start();

include '../config/koneksi.php';

    $email      = $_POST['email'];
    $pass       = md5($_POST['password']);
    $query      = mysqli_query($conn,"SELECT * FROM tb_login WHERE email = '$email' AND password = '$pass'");
    $row        = mysqli_num_rows($query);

    if($row > 0){
        header('../admin/index.php');
    }