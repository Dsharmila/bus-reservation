<?php

$con = @mysqli_connect("localhost","root","","brs") or die("couldnot connect" .mysqli_error());


if(isset($_POST['passid']))
 {

$passid = $_POST["passid"];

$query = "SELECT * FROM reservation WHERE passid = '$passid'";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
if( $count==0 ){
        echo 'No Data to Display';
      }

else
{

while($row = mysqli_fetch_array($result))
        
 {
 	    /*echo "<tr>
					<td>resid:</td>
					<td>seatno:</td>
					<td>passid</td>
					<td>busid</td>
					<td>date:</td>
				    </tr>";
 	    echo "<tr>
					<td>".$row['resid']."</td>
					<td>".$row['seatno']."</td>
					<td>".$row['passid']."</td>
					<td>".$row['busid']."</td>
					<td>".$row['date']."</td>
				    </tr>";*/
        echo  "resid: {$row["resid"]} <br>".
              "seatno: {$row["seatno"]} <br>".
              "passid:  {$row["passid"]} <br>".
              "busid: {$row["busid"]} <br>".
              "Date: {$row["date"]} <br><br><br>";
              
 }


}
}

else
    echo "Sorry, your credentials are not valid, Please try again."; 


mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<body style="background-color:#E6E6FA;">


</body>
</html>