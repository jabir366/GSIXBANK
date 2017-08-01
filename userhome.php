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
    <style>
	h5{
	}
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
							<li><a href="userhome.php">Home</a></li>
							<li><a href="index-1.html">Services</a></li>
                            <li><a href="index-2.html">Branches</a></li>
							<li><a href="index-3.html">About Us</a></li>
							<li class="current"><a href="logout.php">Logout</a></li>
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
   
   <h5 align="left" class="h5__mod">Welcome <?php 
   error_reporting(0);
   include "db.php";
   session_start();
		$user=$_SESSION['username'];
   $sql="select name from userdetails where username='$user'";
$res=mysql_query($sql,$con);
$r=mysql_fetch_array($res);
echo $r[0]; ?></h5>
   <div style="width:100%; font-size:"">
     <div style="float:left; width:45%;" >  &nbsp;</div>
    
<table width="50%" border="0" align="center">
  <tr>
    <td><a  onClick="balance();" id="bal">Check Balance</a></td>
  </tr>
  <tr>
    <td><a href="cash.php">Add/Withdraw Cash</a></td>
  </tr>
  <tr>
    <td><a href="moneytransfer.php">Transfer Money</a></td>
  </tr>
  <tr>
    <td><a href="">Iinterest Calculation</a></td>
  </tr>
  <tr>
      <td><a href="mancheque.php">Manipulate Check</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
 
	

  </div>
</section>
<script language="javascript">
 function balance() {
	<?php
    error_reporting(0);
   include "db.php";
   session_start();
		$user=$_SESSION['username'];
   $sql="select name,balance from userdetails where username='$user'";
$res=mysql_query($sql,$con);
$r=mysql_fetch_array($res);
?>
alert('<?php echo "Dear ". $r[0] . ", Your Account balance is RS." . $r[1];?>');
}
</script>
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
</html>000