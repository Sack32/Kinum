<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('cssjs.php'); ?>
</head>
<body>
<?php include('header.php') ?>
	<div class='container'>
		<div class='card'>
			<div class='container-fliud'>
				<div class='wrapper row'>
					
					<?php  
					$host='localhost';
					$user='root';
					$pass='';
					$database='kinum';

					$con = mysqli_connect("$host","$user","$pass","$database");

					$id = $_GET['id'];

               		$query = 'SELECT * FROM product';  
					$result = mysqli_query($con, $query);  
					while($row=mysqli_fetch_assoc($result))
					{
						if ($id==$row['id'])
						{ 
							$sql="SELECT * from product where id='$id'";
						}
					}
						$result=mysqli_query($con, $sql);
                							
                	

                								
                						
                		$row=mysqli_fetch_assoc($result); 	
                		echo "<div class='preview col-md-6'>
						<div class='preview-pic tab-content'>
						 <div class='tab-pane active' id='pic-1'><img src='{$row['image']}';' /></div>
						  <div class='tab-pane' id='pic-2'><img src='{$row['image']}'/></div>
						  <div class='tab-pane' id='pic-3'><img src='{$row['image']}'  /></div>
						  <div class='tab-pane' id='pic-4'><img src='{$row['image']}' /></div>
						  <div class='tab-pane' id='pic-5'><img src='{$row['image']}' /></div>
						</div>'				
					</div>
					<div class='details col-md-6'>
						<h3 class='product-title'> {$row['name']} </h3>
						<p class='product-description'>this is description</p>
						<h4 class='price'>current price: <span> Rs. {$row['price']}</span></h4>
						
						<h5 class='sizes'>sizes:
							<span class='size' data-toggle='tooltip' title='small'>s</span>
							<span class='size' data-toggle='tooltip' title='medium'>m</span>
							<span class='size' data-toggle='tooltip' title='large'>l</span>
							<span class='size' data-toggle='tooltip' title='xtra large'>xl</span>
						</h5>
						<h5 class='colors'>colors:
							<span class='color orange not-available' data-toggle='tooltip' title='Not In store'></span>
							<span class='color green'></span>
							<span class='color blue'></span>
						</h5>
						<div class='cart'>  
	                     	<form method='post' action='cart.php?action=add&id={$row['id']}>  
	                          <div style='border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;' align='center'> 
	                               <h3> Quantity </h3> 
	                               <input type='text' name='quantity' class='form-control' value='1'>
	                               <input type='hidden' name='hidden_name' value='{$row['name']}' />  
	                               <input type='hidden' name='hidden_price' value='{$row['price']}' />  
	                               <input type='submit' name='add_to_cart' style='margin-top:5px;' class='btn btn-success' value='Add to Cart' />  
	                          </div>  
	                     </form>  
                		</div>  
					</div>"; ?>		
						
						
				
				</div>
			</div>
		</div>
	</div>
</body>
</html>