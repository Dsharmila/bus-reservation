<!DOCTYPE html>
<html>
<head>
<title>Display</title>
<script>
function openWin() {
    window.open("layout.html");
}
function openWin1() {
    window.open("registration.html");
}
</script>
</head>
<body bgcolor="#E6E6FA">

<center><h1>BUSES AVAILABILITY</h1>



<?php

$con = @mysqli_connect("localhost","root","","brs") or die("couldnot connect" .mysqli_error());


if(isset($_POST['boarding']) && isset($_POST['departure']))
 {

$boarding = $_POST["boarding"];
$departure = $_POST["departure"];

$query = "SELECT * FROM bus WHERE boarding = '$boarding' and departure = '$departure'";

/*$query = "SELECT  b.busid,b.type,r.boarding,r.departure FROM bus b left join route r on r.routeid=b.routeid where r.boarding = $boarding and r.departure = $departure";*/



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
					<td>".$row['busid']."</td>
					<td>".$row['type']."</td>
					<td>".$row['boarding']."</td>
					<td>".$row['departure']."</td>
				</tr>";*/
				echo  "<a href='layout.html'>busid: {$row["busid"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".
              "type: {$row["type"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".
              "boarding:  {$row["boarding"]}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".
              "departure: {$row["departure"]}</a><br><br><br> ";
              
              
              
			}


  }
}

else
    echo "Sorry, your credentials are not valid, Please try again."; 


mysqli_close($con);

?>
</body>
</html>