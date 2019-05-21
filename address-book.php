<!DOCTYPE html>
<html lang="en">
<head>
	<title> AddressBook</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('cssjs.php'); ?>
</head>

<body>
<?php include('header.php')
; ?>
<div class="clearfix"></div><br>

<div class="col-md-12 container myaccount">
	
	<div class="col-md-1"></div>
	<div class="col-md-3 list">
		<h3>MY ACCOUNT</h3>
		<hr style="display: block; color: red;">
		<li><a href="cust_login.html">PERSONAL INFORMATION</a></li>
		<li><a href="address-book.html">ADDRESS BOOK</a></li>
		<li><a href="#">MY ORDERS</a></li>
		<li><a href="#">MY REVIEWS & RATING</a></li>
		<li><a href="#">MY SAVED ITEMS</a></li>
		<li><a href="#">MY COUPONS</a></li>
	</div>

	<div class="col-md-6 address">
		<h3>Address Book</h3>
		<hr>
		<ul>
		<li>First name: Sack</li><br>
		<li>Last name: Sack</li> <br>
		<li>Phone number: Not assigned</li> <br>
		<li>Telephone number: Not assigned</li> <br>
		<li>Address: Not assigned </li><br>
		<li>Region: Not assigned</li> <br>
		<li>City: Not assigned </li><br>
		</ul>


		<h4 style="text-align: center;"><u>Add/Edit new address</u></h4>
			<h5><b>Contact information</b></h5>
			<hr>
			<form>
			First name* <br>
			<input type="text" name="firstname" value="Sack" required>
			<br><br>
			Last name* <br>
			<input type="text" name="lastname" value="Sack" required>
			<br><br>
			Telephone* <br>
			<input type="tel" name="usrtel" required>
			<br><br>
			Additional phone number(optional)<br>
			<input type="tel" name="usrtel">
			<br><br>
			Address*<br>
			<input type="text" name="address" required>
			<br><br>
			Address-2<br>
			<input type="text" name="address" >
			<br><br>
			Region*<br>
			<select name="region">
				<option value="Mechi">Mechi</option>
				<option value="Koshi">Koshi</option>
				<option value="Sagarmatha">Sagarmatha</option>
				<option value="Janakpur">Janakpur</option>
				<option value="Bagmati">Bagmati</option>
				<option value="Narayani">Narayani</option>
				<option value="Rapti">Rapti</option>
				<option value="Lubmini">Lubmini</option>
				<option value="Seti">Seti</option>
				<option value="Gandaki">Gandaki</option>
				<option value="Bheri">Bheri</option>
				<option value="Mahakali">Mahakali</option>
				<option value="Dhaulagiri">Dhaulagiri</option>
				<option value="Karnali">Karnali</option>
			</select>
			<br><br>
			City*<br>
			<input type="text" name="city" required>
			<br><br>
			<input type="submit" class="btn btn-info" value="Submit">
			<br><br>
			<p style="color: red;">*required fields</p>
		</form>
		

	</div>

</div>










<footer>
	<div class="col-md-12 wrapper"> 
		<div class="col-md-4 social">
			<h3><b> JOIN US ON </b></h3>

			<ul>
				<a alt="facebook" href="#" title="facebook"><i class="fa fa-3x fa-facebook"></i></a>
				<a alt="instagram" href="#" title="facebook"><i class="fa fa-3x fa-instagram"></i></a>
				<a alt="google" href="#" title="facebook"><i class="fa fa-3x fa-google"></i></a>
				<a alt="google" href="#" title="facebook"><i class="fa fa-3x fa-twitter"></i></a>
				<a alt="google" href="#" title="facebook"><i class="fa fa-3x fa-youtube"></i></a>
				
			</ul>
		</div>
		<div class="col-md-3 help">
			<H3><b>LET US HELP YOU</b></H3>
			
				<li><a href="#">Customer service</a></li>
				<li><a href="#">Student discount</a></li>
				<li><a href="#">Track my order</a></li>
				<li><a href="#">Size guide</a></li>
				<li><a href="#">Return</a></li>
				<li><a href="#">Customer services twitter</a></li>
			
		</div>
		<div class="col-md-2 about">
			<H3><b>ABOUT US</b></H3>
			<li><a href="#">About Kinum</a></li>
			<li><a href="#">Investor Relations</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Become an affilate</a></li>
			<li><a href="#">Sitemap</a></li>
		</div>
		<div class="col-md-3 app">
			<h3>GET THE APP</h3>
			<li>
				<a href="#" target="_blank" title="App store">
				<img alt="App store" src="http://us.boohoo.com/on/demandware.static/-/Library-Sites-boohoo-content-global/default/dw15f61291/images/footer/app-store.jpg" title=""></a>
			</li>
			<br>
			<li>
				<a href="#" target="_blank" title="Google play"><img alt="Google play" src="http://us.boohoo.com/on/demandware.static/-/Library-Sites-boohoo-content-global/default/dw8aa6a883/images/footer/google-play.jpg" title=""></a>
			</li>
		</div>
		<div class="clearfix"></div>
		<div>
			<p>Copyright &copy 2017 <a href="index.html" style="color: #fff;">KINUM.COM</a></p>
		</div>
	</div>
</footer>

</body>
</html>