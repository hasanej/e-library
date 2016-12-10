<?php
    require_once "koneksi.php";
    $pass = md5($_POST['peminjam_pass_new']);
    $query = "INSERT INTO user(username,password,nama_awal,nama_akhir,email) VALUES ('$_POST[peminjam_user_new]','$pass',
    '$_POST[nm_awal]','$_POST[nm_akhir]','$_POST[email]')";
    $result = mysql_query($query);
    header('location:registered.php');
?>