<?php

$con = @mysqli_connect("localhost","root","","brs") or die("couldnot connect" .mysqli_error());
session_start();

if(isset($_POST['username']) && isset($_POST['password']))
 {

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM login WHERE username = '$username'  &&  password = '$password'";
$result=mysqli_query($con,$query);
$_active = $row['active'];

$count=mysqli_num_rows($result);
$_active = $row['active'];
if( $count==0 ){
        echo 'No Data to Display';
      }

else
{

while($row = mysqli_fetch_assoc($result))
        
 {
       session_register("username");
       $_SESSION['login_user'] = $username;
       header("location: booking.html");
 }


}
}

else
    echo "your username and password are invalid"; 


mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
<script>
function openWin() {
    window.open("payment.html");
}
</script>
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

<h2><center>BOOKING FORM</h2><center>
<form>
<left><label><b>source</b></label>
<input type="text" name="Source"></left><br><br>
<left><label><b>destination</b></label>
<input type="text" name="Destination"></left><br><br>
<left><label><b>date of journey</b></label>
<input type="date" name="date_of_journey"></left><br><br>
<br>
<input type="button"value="submit" onclick="openWin()">

</form>
</body>
</html>
