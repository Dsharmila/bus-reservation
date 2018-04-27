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
  <li><a href="booking.html">Availability check</a></li>
  <li><a href="feedback.html">Feedback</a></li>
  <li><a href="about.html">about</a></li>
</ul>
<marquee behavior="scroll" direction="left">One's destination is never a place, but always a new way of seeing things. </marquee>
</body>
</html>

<body bgcolor="#E6E6FA"><center>
<br><br><br>
<?php
$con = @mysqli_connect($servername = "localhost", $username = "root", $password = "","brs");
mysqli_select_db($con,"brs");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
  
    echo "Thankyou for your valuable feedback";



mysqli_close($con);

?>
</body>