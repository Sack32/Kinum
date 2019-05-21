function loginas() {
    var x = document.getElementById("type").value;

    if (x==1){
        document.getElementById('out').for="out3";
        document.getElementById('out2').innerHTML="Email";
        document.getElementById('out3').type="email";
        document.getElementById('out3').name="email";
        document.getElementById('out3').placeholder="Enter email";
        document.getElementById('login').action="cust_edit.php";
        } else if(x==2){
        document.getElementById('out').for="out3";
        document.getElementById('out2').innerHTML="User Name";
        document.getElementById('out3').type="text";
        document.getElementById('out3').name="uname";
        document.getElementById('out3').placeholder="Enter Username";
        document.getElementById('login').action="admin.php";
        } else if(x==3){
        document.getElementById('out').for="out3";
        document.getElementById('out2').innerHTML="User Name";
        document.getElementById('out3').type="text";
        document.getElementById('out3').name="uname";
        document.getElementById('out3').placeholder="Enter Username";
        document.getElementById('login').action="add-product.php";
        }
}


function modalblock(){
    document.getElementById('modal1').style.display='block';
}

function christmas(){
    document.getElementById('modal1').style.display='block';
    document.getElementById('tit').innerHTML='Merry Christmas!!';
    document.getElementById('image').src='img/xmas.gif';
    document.getElementById('msg').innerHTML='Special discounts on socks and shipping gifts';
}
    
function newyear(){
    document.getElementById('modal1').style.display='block';
    document.getElementById('tit').innerHTML='Happy New Year!!';
    document.getElementById('image').src='img/newyear.gif';
    document.getElementById('msg').innerHTML='Special discounts on lights!!';
}

function valentine(){
    document.getElementById('modal1').style.display='block';
    document.getElementById('tit').innerHTML='Happy Valentines Day!!';
    document.getElementById('image').src='img/valentine.gif';
    document.getElementById('msg').innerHTML='Special discounts on chocolates and Flowers!!';
}


function checkpassword()
{
    var a=document.forms["signup"]["pwd"].value;
    var b=document.forms["signup"]["cpwd"].value;

    if (a!=b){
        window.alert("Passwords don't match");
        return false;
    } else if(a.length<8){
        window.alert("Password too short");
        return false;
    }

}
