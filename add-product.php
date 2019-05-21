
<!--to be accessed by staffs only -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('cssjs.php'); ?>
</head>
<body>
	<div class="container">
	<div class="row">
<form class="form-horizontal" action="add.php" method="post">
<fieldset>

<!-- Form Name -->
<div class="form-group">
<legend style="text-align: center">Product Adder</legend>

  <label class="col-md-4 control-label" for="product">Product type</label>
  <div class="col-md-6">
    <select id="cproduct" name="product" class="form-control">
            				<option >Electronics</option>
                			<option >Food and Drinks</option>
                			<option >Pharmacy, Health and Beauties</option>
                			<option >Men's apparel</option>
                			<option >Women's apparel</option>
                			<option >Kid's apparel</option>
                			<option >Books</option>
                      <option >Furnitures and Appliances</option>
                            <option value="ultimate">Grocery</option>


                			
</select>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="price">Price</label>  
  <div class="col-md-6">
  <input id="price" name="price" type="number" placeholder="Rs." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company">Company/Manufacturer</label>  
  <div class="col-md-6">
  <input id="company" name="company" type="text" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="company">Image</label>  
  <div class="col-md-6">
  <input id="image" name="filename" type="file" placeholder="images" accept="jpeg,png" class="form-control input-md" required="">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Add product</button>
  </div>
</div>

</fieldset>
</form>
	</div>
</div>
</body>
</html>