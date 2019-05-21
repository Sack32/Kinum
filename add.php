<?php
	session_start();
	include 'add-product.php';

	if (isset($_POST['submit'])) {
		
		$host="localhost";
		$user="root";
		$pass="";
		$database="kinum";
		$table="product";
		$con=mysqli_connect("$host", "$user", "$pass","$database");
		

		$prod_name=$_POST['name'];
		$prod_image=$_POST['filename'];
		$prod_price=$_POST['price'];

		$sql="INSERT INTO $table(name,image,price) VALUES ('$prod_name','$prod_image','$prod_price')";

		$a=mysqli_query($con, $sql);
		if ($a==true)
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
		} 
		else {
			echo "ERROR" .$sql. "<br/>" .mysqli_connect_error();
		}
		mysqli_close();

	

?>