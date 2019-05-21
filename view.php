

  <div class="container" >   
  <div class="row">         
  <?php  
    $connect = mysqli_connect("localhost", "root", "", "kinum");
    $query = "SELECT * FROM product ORDER BY id ASC";  
    $result = mysqli_query($connect, $query);  
    if(mysqli_num_rows($result) > 0)  
    {  
      while($row = mysqli_fetch_array($result))  
    {  
    
  ?>
    
        <!-- BEGIN PRODUCTS -->
        <div class="col-md-3 col-sm-6">
            <span class="thumbnail">
                <img src=<?php echo $row["image"];?> style="width: 350px; height: 230px;" /> 
                <h4><?php echo $row["name"]; ?></h4>
                <!--<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>-->
                <p>This is a product </p>
                <hr class="line">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p class="price">Rs. <?php echo $row["price"]; ?></p>
                    </div>
                     
                    <div class="col-md-6 col-sm-6">
                    <?php echo "<a href='product-details.php?id={$row['id']}'><button class='btn btn-success'> VIEW ITEM</button></a>"; ?>
                    </div>
                    
                </div>
            </span>
        </div> 
     <?php  
      }  
    }  
    ?>                            
                   
</div>
</div>
                          
            
                              
                            
                         
