<?php
session_start();
$connection=mysqli_connect('localhost','root','','brs');
if(!$connection){
    die("database connection failed" . mysql_error($connection));
}

//echo "enter";
if(isset($_POST['password']) && !empty($_POST['username'])){
   $username=mysqli_real_escape_string($connection,$_POST['username']);
    $password=$_POST['password'];
    //echo "ente1r";
    $sql= "SELECT * FROM login WHERE username='$username' AND password='$password'";
$_SESSION['username']=$username;
    $result=mysqli_query($connection,$sql);
    $count=mysqli_num_rows($result);
    if($count == 1){
    	echo $_SESSION['username']=$username;
         echo  "succesfully loggined in";
    	header("Location:booking.html");

    }
    else{
    
    	echo "<script type='text/javascript'>alert('Invalid username or password')</script>";
    }
}
else
if(isset($_SESSION['username'])){
		echo "<script type='text/javascript'>alert('User already logged in')</script>";
}

?>