<?php
$con = @mysqli_connect($servername = "localhost", $username = "root", $password = "","brs");
mysqli_select_db($con,"brs");

if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
  $resid = $_POST["resid"];
  $passid = $_POST["passid"];
   $sql = "DELETE FROM reservation WHERE resid= '$resid' and passid= '$passid'";

if (mysqli_query($con, $sql)) {
    echo "cancellation successfully completed";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }


mysqli_close($con);

?>