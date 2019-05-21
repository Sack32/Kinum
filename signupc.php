  <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SignUp Customer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </head>
  <body>
  
  
   <header class="navbar-fixed-top">


      
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li ><a href="index.php"><span class="glyphicon glyphicon-home">   Home</span></a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Order Status </a></li>
            <li><a href="#"> Customer Service </a></li>
              <li><a href="login.php" ><span class="glyphicon glyphicon-user"></span>SignIn</a>
          
          </li>

          <li class="dropdown active" ><a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignUp<span class="caret"></span></a>
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

      <legend style="text-align: center">
        <a href="index.php"><img src="img/cart1.png" alt="logo" style="width: 200px; height: 90px;" /></a>
      </legend >

      <div class="well" style="width: 600px;margin: auto;text-align: center; ">
      <h1>Sign Up As Costumer</h1>     
    
    
    <div class="well" style="background-color:#f0fff0;width: 500px;margin: auto;">
       <p><br></p>
        <form class="form-horizontal" action="/action_page.php" method="post" id="login" onsubmit="return checkpassword()">
         <div class="form-group">
             <label class="control-label col-sm-4" for="fname">First Name:</label>
             <div class="col-xs-3">
                <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" style="width: 230px;" required>
             </div>
        </div>
         <div class="form-group">
             <label class="control-label col-sm-4" for="lName">Last Name:</label>
             <div class="col-xs-3">
                <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" style="width: 230px;" required>
             </div>
        </div>
         <div class="form-group">
             <label class="control-label col-sm-4" for="email">Email:</label>
             <div class="col-sm-3">
                <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" style="width: 230px;" required>
             </div>
        </div>
        <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Password:</label>
              <div class="col-sm-3">          
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" style="width: 230px;" required>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-4" for="cpwd">Confirm Password:</label>
              <div class="col-sm-3">          
                <input type="password" class="form-control" id="cpwd" placeholder="Confirm password" name="cpwd" style="width: 230px;" required>
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
                <span class="psw">Forgot <a href="#">password?</a></span>
             
          </div>

      </form>
      </div>
  
  
  </body>
</html>

