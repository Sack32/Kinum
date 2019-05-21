	<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <?php include('cssjs.php'); ?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
   
   <style>
   
  .modal {
    display: none; 
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
    margin: auto;
}

.modal-content {
    background-color: #fefefe;
    text-align: center;
    
    text-decoration-color: #000;

    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}


.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

    </style>
  </head>
  <body>
  
  
    

  



<div id="modal1" class="modal">
   
  <div class="modal-content animate" style="margin:auto;">
    <h1 id="tit">title</h1>
    <div class="imgcontainer">

      <span onclick="document.getElementById('modal1').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img id="image" src="img/xmas.gif" alt="Avatar" style="margin: auto; width: 200px;height: 200px;">
    </div>

    <div  id="msg">
    
        
    </div>
    <p></br></p>

    
     <a href="index.php"> <button type="button" class="button btn-success">Shop Now!!!</button></a>
<p></br></p>      
  </div>
</div>



<button onclick="modalblock()" >death</button>
<button onclick="christmas()" >christmas</button>
<button onclick="valentine()" >valentines day</button>
<button onclick="newyear()" >new year</button>

<script>
var d = new Date();
if (d.getDate()==25 && d.getMonth()==11){
christmas();
} else if(d.getDate()==14 && d.getMonth()==1){
  valentine();
}
else if(d.getDate()==1 && d.getMonth()==0){
  newyear();
}

var modal = document.getElementById('modal1');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    </body>
</html>