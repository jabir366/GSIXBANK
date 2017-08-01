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
table,th,td {
    border: 1px solid black;
}
[class|=top]
{
	 border: 0px;
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

<section >

<div style="width:100%; font-size:"">
    <div style="float:left; width:60%;" >&nbsp;</div>
<form name="form1" method="post" action="userview.php"  >
      <label for="search"></label>
      <input type="text" name="searchv" id="searchv" align="right">
<input type="submit" name="search" id="search" value="search" align="right">
  </form>
  
</div>
	<div class="full-width-container block-1">
     
		<div class="container">
<h4>Customer Details</h4>

          <table width="100%" border="2 solid black">
  <tr>
    <th width="10%">Name</td>
    <th width="10%">Guardian</td>
    <th width="5%">Gender</td>
    
    <th width="9%">Permenent address</td>
    
    <th width="8%">Date of birth</td>
    <th width="6%">Phone no</td>
    <th width="5%">Email id</td>
    <th width="10%">Status</td>
    </tr>
<?php
error_reporting(0);
  include('db.php');
  session_start();
  $branch= $_SESSION['branch'];
  if(isset($_POST['search']))
  {
	  extract($_POST);
	$sql="SELECT userdetails.name ,userdetails.guardian ,userdetails.gender,userdetails.address,userdetails.dob,userdetails.phno ,userdetails.email ,users.username,users.status FROM userdetails,users WHERE userdetails.branch = '$branch' AND users.type='customer'AND userdetails.username=users.username  AND userdetails.name like '$searchv%'";
  	$res=mysql_query($sql,$con)or die(mysql_error());
  
	 while($r=mysql_fetch_array($res))
	{
	 ?>
  <tr>
    <td><?php echo $r[0];?></td>
    <td><?php echo $r[1];?></td>
    <td><?php echo $r[2];?></td>
   
    <td><?php echo $r[3];?></td>
    <td><?php echo $r[4];?></td>
    <td><?php echo $r[5];?></td>
    <td><?php echo $r[6];?></td>

    <td><?php if($r[8]!='active'){?><a href="activate.php?uname=<?php echo $r[7];?>"><?php echo 'Activate';?></a>
     <?php } 
	else echo 'Activeted'; ?></td>
    </tr>
      <?php
 }
  }
  else
  {
 $sql="SELECT userdetails.name,userdetails.guardian,userdetails.gender,userdetails.address,userdetails.dob,userdetails.phno ,userdetails.email ,users.username,users.status FROM userdetails,users WHERE userdetails.branch = '$branch' AND users.type='customer'AND userdetails.username=users.username";

  $res=mysql_query($sql,$con)or die(mysql_error());
 
  
 while($r=mysql_fetch_array($res))
 {
	  ?>
  <tr>
    <td><?php echo $r[0];?></td>
    <td><?php echo $r[1];?></td>
    <td><?php echo $r[2];?></td>
   
    <td><?php echo $r[3];?></td>
    <td><?php echo $r[4];?></td>
    <td><?php echo $r[5];?></td>
    <td><?php echo $r[6];?></td>

    <td><?php if($r[8]!='active'){?><a href="activate.php?uname=<?php echo $r[7];?>"><?php echo 'Activate';?></a>
     <?php } 
	else echo 'Activeted'; ?></td>
    </tr>
      <?php
 }
  }
 ?>
 </table></div></div>

				<div id="touch_gallery">
					<div class="grid_4"></div>
					<div class="grid_4">					</div>
				</div>
			</div>
		</div>
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