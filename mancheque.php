<?php
error_reporting(0);
include('db.php');
extract($_POST);
session_start();
$sender=$_SESSION['username'];
$sql="insert into cheque(sender,recipient,date,amount) values('$sender','$recipient','$date','$amount')";
 $res=mysql_query($sql,$con);
if($res) { 
?>
 <script language="javascript">
	alert("Sucessfully submitted...");
	window.location="userhome.php";
</script>
    <?php 
	}
	 else
	 {
	?>
 <script language="javascript">
	alert(" Failed to manipulate cheque.... Try Again...");
	window.location="mancheque.php";
</script>
    <?php 
	 }
mysql_close($con);
?>