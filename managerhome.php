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
							<li><a href="managerhome.php">Home</a></li>
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
		<div class="container">
			<div class="row">
				<div class="grid_12">
				  <table width="90%" border="0">
				    <tr>
				      <th scope="row"><nav>
    			<ul class="sf-menu">
					<li><input name="customer" type="button" value="Customer" ></a>
								<ul>
									<li><a href="userview.php">Accept Customers</a></li>
									<li><a href="removecustomer.php">Remove Customer</a></li>
								</ul>
							</li>						
							
				  </ul></nav></th>
				      <td><nav>
    			<ul class="sf-menu">
					<li><input name="transaction" type="button" value="Account" >
					</a>
								<ul>
									<li><a href="#">Set Minimum Balance</a></li>
									<li><a href="#">Approve Cheque</a></li>
                                    <li><a href="#">Approve Money Transer Request</a></li>
									
								</ul>		
							</li>						
							
				  </ul></nav></td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
			        </tr>
				    <tr>
				      <th scope="row">&nbsp;</th>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
			        </tr>
				    <tr>
				      <th scope="row">&nbsp;</th>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
				      <td>&nbsp;</td>
			        </tr>
			      </table>
				</div>
				<div id="touch_gallery">
					<div class="grid_4"></div>
					<div class="grid_4">					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="full-width-container block-1">
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