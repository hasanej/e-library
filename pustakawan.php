<?php
    session_start();
    require_once "koneksi.php";
    //Variable
    $user=$_POST['pustakawan_user'];
    $pass=md5($_POST['pustakawan_pass']);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
	   $query=mysql_query("SELECT username, password FROM admin WHERE username='".$user."'
										AND password='".$pass."'");
	   $record=mysql_fetch_array($query);
	   //cek jika data ketemu
	   if(mysql_num_rows($query)){
        //CREATE SESSION
		$_SESSION['user']=$record['username'];
		$_SESSION['pass']=$record['password'];
	
	   header('location:home_admin.php');	
	}
	
	else {
        
       
        header('location:failure.php');
	
	}
	
}

?>