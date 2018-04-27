<?php


$con = mysqli_connect($servername = "localhost", $username = "root", $password = "","brs");
mysqli_select_db($con,"brs");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

$sql="INSERT INTO passenger(name,username,phno,email,gender) VALUES('$_POST[name]', '$_POST[username]', '$_POST[phno]', '$_POST[email]', '$_POST[gender]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

echo "1 record added";
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: DarkCyan;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body bgcolor="#E6E6FA">

<ul>
  <li><a class="active" href="home.html">Home</a></li>
  <li><a href="login.html">Login</a></li>
  <li><a href="registration.html">Registration</a></li>
   <li><a href="booking.html">Booking</a></li>
  <li><a href="cancellation.html">Cancellation</a></li>
  <li><a href="history.html">Travel history</a></li>
  <li><a href="booking.html">Availability check</a></li>
  <li><a href="about.html">About</a></li>
</ul>
<marquee behavior="scroll" direction="left">One's destination is never a place, but always a new way of seeing things. </marquee>

<p align="right">
<img src="bus image.jpg" alt="Bus View" align="center">
</p>
<p align="left">
<img src="bus image1.jpg" alt="Bus View" align="center">
</p>
<p align="right">
<img src="bus image2.jpg" alt="Bus View" align="center">
</p>
</body>
</html>
