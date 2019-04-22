<?php

 include '../config/koneksi.php';

 $username  = $_POST['username'];
 $email     = $_POST['email'];
 $pass      = md5($_POST['password']);
 $role      = $_POST['role'];

 $insert = mysqli_query($conn,"INSERT INTO tb_login(`username`, `email`, `password`, `role`) VALUES('$username','$email','$pass','3')");
 header('location"../Auth.php');