//login//

function loginas() {
  var x = document.getElementById("type").value;
  if (x==1){document.getElementById("out").innerHTML = '<label class="control-label col-sm-4" for="email">Email:</label><div class="col-sm-6"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email"></div>';
        //document.getElementById("submit").innerHTML = '<form class="form-horizontal" action="cust_login.php" method="post">';
        } else if(x==2){document.getElementById("out").innerHTML = '<label class="control-label col-sm-4" for="email">Username:</label><div class="col-sm-6"><input type="username" class="form-control" id="email" placeholder="Enter username" name="uname"></div>';
        //document.getElementById("submit").innerHTML = '<form class="form-horizontal" action="#" method="post">';
        } else if(x==2){document.getElementById("out").innerHTML = '<label class="control-label col-sm-4" for="email">Username:</label><div class="col-sm-6"><input type="username" class="form-control" id="email" placeholder="Enter username" name="uname"></div>';
        //document.getElementById("submit").innerHTML = '<form class="form-horizontal" action="add-product.php" method="post">';

            
        }






