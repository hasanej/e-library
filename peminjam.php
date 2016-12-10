<?php
    session_start();
    require_once "koneksi.php";
    //Variable
    $user=$_POST['peminjam_user'];
    $pass=md5($_POST['peminjam_pass']);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
	   $query=mysql_query("SELECT username, password FROM user WHERE username='".$user."'
										AND password='".$pass."'");
	   $record=mysql_fetch_array($query);
	   //cek jika data ketemu
	   if(mysql_num_rows($query)){
        //CREATE SESSION
		$_SESSION['user']=$record['username'];
		$_SESSION['pass']=$record['password'];
	
	   header('location:home_user.html');	
	}
	
	else {
        
       
        header('location:failure.php');
	
	}
	
}

?>