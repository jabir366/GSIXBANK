<!DOCTYPE html>
<html lang="en">
	<head>
	<title>GSIX BANK</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/script.js"></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
    <style>/*
    input[type=text],
	input[type=email],
	input[type=password],
	input[type=date],
	input[type=radio]
	{
    border: 2px solid red;
    border-radius: 4px;
	
}
textarea
{
border: 2px solid red;
    border-radius: 4px;
}
select
{
border: 2px solid red;
    border-radius: 4px;
}*/
</style>
	</head>
<body class="index-2">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<h1><a href="index.html">GSIX BANK</a><span>Your New Banking Partner</span></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="index-1.html">Services</a></li>
                            <li><a href="index-2.html">Branches</a></li>
							<li><a href="index-3.html">About Us</a></li>
							<li class="current"><a href="loginpage.php">Login</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
  <div style="width:100%; font-size:"">
    <div style="float:left; width:20%;" >&nbsp;</div>
    <form id="signup" name="form1" method="post" action="signup_process.php" >
  <table width="80%" height="527" border="0" align="center">
    <tr>
      <td colspan="2" align="center"><strong>REGISTRATION</strong></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;1.Name</td>
      <td><label for="Name"></label>
      <input type="text" name="name" id="textfield1" required /></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;2.Son/Wife/Daughter of</td>
      <td><label for="relation"></label>
      <input type="text" name="guardian" id="guardian" required /></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;3.Gender</td>
      <td><input type="radio" name="gender" id="radio" value="male" />
        <label for="gender"></label>
      Male 
      <input type="radio" name="gender" id="radio2" value="female" />
      Female</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;4.Permanant adress</td>
      <td><label for="present address"></label>
        <textarea name="paddress" id="textfield" cols="35" rows="5" required></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;5.Date Of Birth </td>
      <td><label for="dob"></label>
        <input type="date" name="dob" id="textfield" required/></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;6.Ph no</td>
      <td><label for="phno"></label>
      <input type="text" name="phno" id="textfield" required /></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;7.Account type</td>
      <td><label for="acctype"></label>
        <select name="acctype" id="acctype">
        <option value="current">Current Account</option>
        <option value="savings">Savings Account</option>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;8.Select Branch</td>
      <td><label for="branch"></label>
        <select name="branch" id="branch">
        <?php
		error_reporting(E_ALL ^ E_DEPRECATED);
		include('db.php');
		$sql="select * from branches";
		$res=mysql_query($sql,$con);
		
		while($r=mysql_fetch_array($res))
		{
			echo "<option value=".$r[1]." >".$r[1]."</option>";
		}
	
		?>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;8.e-mail id</td>
      <td><label for="emailid"></label>
      <input type="email" name="emailid" id="textfield" required/></td>
    </tr>
    
    <tr>
      <td>&nbsp;&nbsp;&nbsp;9.Password</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="textfield" required /></td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;&nbsp;10.Confirm password</td>
      <td><label for="confirmpassword"></label>
      <input type="password" name="confirmpassword" id="textfield" required /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="checkbox" type="checkbox" required id="checkbox" />I Agree The Terms and Conditions
        <label for="checkbox"></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="reset" id="reset" value="reset" /></td>
    </tr>
  </table>
          </form>
	
  </div>
</section>

<!--=======footer=================================-->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="grid_12 copyright">
				<h2><span>Follow Us</span></h2>
				<a href="#" class="btn bd-ra"><span class="fa fa-facebook"></span></a>
				<a href="#" class="btn bd-ra"><span class="fa fa-tumblr"></span></a>
				<a href="#" class="btn bd-ra"><span class="fa fa-google-plus"></span></a>
				<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
			</div>
		</div>
	</div>
	<div class="footer_bottom"><a href="#" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>
</body>
</html>