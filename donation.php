<?php
	
	include ('donate.php');
	$host="localhost";
	$user="root";
	$pass="";
	$database="kinum";
	$table="donation";

	$con=mysqli_connect("$host", "$user", "$pass", "$database");
	$sql="CREATE TABLE IF NOT EXISTS $table (
			ID int(20) unsigned primary key auto_increment,
			Amount varchar(15) NOT NULL)";
	$a1=mysqli_query($con,$sql);

		if (isset($_POST['submit']))
		{
			$amount=$_POST['donationamount'];
			$sql="INSERT INTO $table(Amount) values ('$amount')";
			$a2=mysqli_query($con,$sql);
			if ($a2==true)
			{
				echo '<script>alert("Donation Successful!")</script>';

			}
			else
			{
				echo '<script>alert("Donation unuccessful!")</script>';			
			}
		}
	
	
?>