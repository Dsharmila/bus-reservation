<?php


$con = mysqli_connect($servername = "localhost", $username = "root", $password = "","brs");
mysqli_select_db($con,"brs");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }

$sql = "INSERT INTO login(username,password) VALUES('$_POST[username]', '$_POST[password]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }

//echo "1 record added";
mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
<title>filldetails</title>
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
<body style="background-color:#E6E6FA;">

<form action="insert.php" method="post">
<center><h1>REGISTRATION PAGE</h1><center>


<left><label><b>name</b></label>
<input type="text" placeholder="Enter name" name="name" required></left>
<br><br>

<left><label><b>username</b></label>
<input type="text" placeholder="Enter username" name="username" required></left>
<br><br>

<left><label><b>phno</b></label>
<input type="text" placeholder="Enter phno" name="phno" required></left>
<br><br>

<left><label><b>email</b></label>
<input type="text" placeholder="Enter email" name="email" required></left>
<br><br>

<left><label><b>aadhar</b></label>
<input type="text" placeholder="Enter aadhar" name="aadhar" required></left>
<br><br>

<left><label><b>gender:</b></label>
<br>
<form>
  <input type="radio" name="gender" value="male" checked>Male<br>
  <input type="radio" name="gender" value="female">Female<br> 
</form> 

<br><br><br>

<input type="submit" name="submit" value="submit">

</form>
</body>
</html>

