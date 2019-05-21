	<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
    <title>LogIn</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    </head>


    <body>
    
    <header class="navbar-fixed-top">


      
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li ><a href="index.php"><span class="glyphicon glyphicon-home">   Home</span></a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Order Status </a></li>
            <li><a href="#"> Customer Service </a></li>
              <li class="active"><a href="login.php" ><span class="glyphicon glyphicon-user"></span>SignIn</a>
          
          </li>

          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignUp<span class="caret"></span></a>
           <ul class="dropdown-menu" style="opacity: 1">
                <li><a href="signupc.php">Customer</a></li>
                <li><a href="signupm.php">Manager</a></li>
                <li><a href="signups.php">Staff</a></li>
              </ul>


          </li>
          </ul>
        </div>
      </nav>
  </header>
    
    
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <p><br/></p>
      <div ></div>
      <legend style="text-align: center">
        <a href="index.php"><img src="img/cart1.png" alt="logo" style="width: 200px; height: 90px;" /></a>
      </legend >
    <div class="well" style="width: 600px;margin: auto;text-align: center; ">
      <h1>LogIn</h1> 		 
	  
	  
	  <div class="well" style="background-color:#f0fff0;width: 500px;margin: auto;">
	     <p><br></p>

      
        <form class="form-horizontal" action="cust_edit.php" method="post" id="login">
         <div class="form-group">
        <label class="control-label col-sm-4" for="type">LogIn as:</label>
       
       
       <select class="form-control" id="type" onchange="loginas()" style="  margin-bottom: 17px; max-width: 220px; ">
         </div>
           <option value="1">Customer</option>
           <option value="2">Manager</option>
           <option value="3">Staff</option>
        </select>
     


        <div class="form-group" id="out">
             <label class="control-label col-sm-4" for="out3" id='out2'>Email:</label>
            
                <input type="email" class="form-control" placeholder="Enter email" name="email" id="out3" style="max-width: 230px;" required>
            
        </div>
        <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Password:</label>
                       
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="max-width: 230px;" name="pwd" required>
             
          </div>
         
		 </div>
		
          <div class="form-group">        
              
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
              
          </div>
          <div class="form-group">        
              
                <div class="btn-group">
                  <button type="submit" class="btn btn-success">Login</button>
                  <button type="button" class="btn btn-danger">Cancel</button>
                </div>
                <br>
                <span class="psw">Forgot <a href="https://www.google.com.np/search?q=how+to+not+forget&oq=how+to+not+forg&aqs=chrome.1.69i57j0l5.7574j0j7&sourceid=chrome&ie=UTF-8">password?</a></span>
              
          </div>
          <p id="out"></p>
       

      </form>
    </div>
    </div>
    <p><br/></p>
    <p><br/></p>
    <p><br/></p>
  
     



  
  </body>
</html>

