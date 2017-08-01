<!DOCTYPE html>
<?php
error_reporting(0);
include "db.php";
 session_start();
 $user= $_SESSION['username'];
?>
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
	  <div style="width:100%; font-size:"">
	    <div style="float:left; width:20%;" >  &nbsp;</div>
	  </div>
 <form name="form1" method="post" action="cash.php">
      <label for="cash"></label>
	<table width="80%" border="0">
  <tr>
    <th scope="col">Enter the Amount</th>
    <th scope="col">
      <input type="text" name="cash" id="cash" required>
    </th>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="add" id="add" value="Add Cash" ">
      <input type="submit" name="withdraw" id="withdraw" value="Withdraw cash"></td>
    </tr>
</table>
</form>

  </div>
</section>

<?php

if(isset($_POST['add']))
  {
	  extract($_POST);
  $sql="select balance from userdetails where username='$user'";
  	$res=mysql_query($sql,$con)or die(mysql_error());
    $r=mysql_fetch_array($res);
	$cash=$cash+$r[0];
	 $sql="UPDATE `userdetails` SET `balance` = '$cash' WHERE `username` = '$user'";
  	if($res=mysql_query($sql,$con))
	{?>
		<script language="javascript">
	alert("Cash Added to Account.....");
	window.location="userhome.php";
</script>
	<?php 
	}
	else
	{?>
		<script language="javascript">
	alert("Failed.....try again.........");
	window.location="userhome.php";
</script>
    <?php
	}
  }
  if(isset($_POST['withdraw']))
  {
	  extract($_POST);
  $sql="select balance from userdetails where username='$user'";
  	$res=mysql_query($sql,$con)or die(mysql_error());
    $r=mysql_fetch_array($res);
	$cash=$r[0]-$cash;
	if($cash<0)
	{
	?>
		<script language="javascript">
	alert("Not Enough Balance In Account....");
	window.location="userhome.php";
</script>
    <?php
	}
	else
	{
	 $sql="UPDATE `userdetails` SET `balance` = '$cash' WHERE `username` = '$user'";
  	if($res=mysql_query($sql,$con))
	{?>
		<script language="javascript">
	alert("Cash Withdrawed from Account.....");
	window.location="userhome.php";
</script>
	<?php 
	}
	else
	{?>
		<script language="javascript">
	alert("Failed.....! Please try again.........");
	window.location="userhome.php";
</script>
    <?php
	}
	}
  }
?>
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