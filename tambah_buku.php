<?php
    require_once "koneksi.php";
    $query = "INSERT INTO buku(judul_buku,pengarang,penerbit,tahun_terbit) VALUES ('$_POST[judul]',
    '$_POST[pengarang]','$_POST[penerbit]','$_POST[tahun]')";
    $result = mysql_query($query);
    header('location:home_admin.php');
?>