<?php

include '../config/koneksi.php';

session_start();
session_destroy();
header('location:../Auth.php?pesan=logout');