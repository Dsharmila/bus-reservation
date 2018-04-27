﻿<?php
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
<?php 
$con=mysqli_connect("localhost","root","","brs");
if(mysqli_connect_error())
{
echo "failed";
}
$passid = $_POST["passid"];
	if(isset($_POST["submit"]))
	{
		//echo "submitted";
		//$mno = $_POST["mno"];
		//$message =  $_POST["message"];

		$ch = curl_init();
				$user="ravalialamuri@gmail.com:sujatha22";
		$sql="select phno from passenger where username='$username'";
	
		if($result=mysqli_query($con,$sql))
		{
			if($result->num_rows>0)
			{
					curl_setopt($ch,CURLOPT_URL,"http://api.mVaayoo.com/mvaayooapi/MessageCompose");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_POST, 1);
		
				while($row=mysqli_fetch_assoc($result))
				{
					
					$no=$row["phno"];
					$senderID="TEST SMS"; 
					$msgtxt= "your ticket has been successfully cancelled."; 
					
					curl_setopt($ch, CURLOPT_POSTFIELDS,"user=$user&senderID=$senderID&receipientno=$no&msgtxt=$msgtxt");
					$buffer = curl_exec($ch);
					if(empty ($buffer))
					{
						 echo " buffer is empty ";
			 		}
					else
					{ 
						echo $buffer;
						echo 'Message Send.';
					} 
					
				}
			}
		}curl_close($ch);
		
	}
?>
 
<html>
	<head>
		<title>SMS Sending Using PHP and Mvaayoo API</title>
	</head>
	<body align="center">
	<h1>SMS Sending Using PHP and Mvaayoo API</h1>
		<form action="" method="post">
			 
			  <br>
			  <input type="submit"  name="submit" value="Send"/>
		</form>
		<h3>Total Remaining SMS</h3>
		<?php 
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,  "http://api.mvaayoo.com/mvaayooapi/APIUtil");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "user=ravalialamuri@gmail.com:sujatha22&type=0");
			$buffer = curl_exec($ch);
			echo $buffer;
			curl_close($ch);
		?>
 
		
	</body>
</html>