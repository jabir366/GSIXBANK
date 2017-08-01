<?php
include('db.php');
extract($_POST);
$sql="insert into branches(name,place,ifsc) values('$name','$place','$ifsc')";
 $res=mysql_query($sql,$con);
if($res) { 
?>
 <script language="javascript">
	alert("Sucessfully Added branch....");
	window.location="adminhome.php";
</script>
    <?php 
	}
	 else
	 {
	?>
 <script language="javascript">
	alert("Adding branch Failed.Please try again");
	window.location="adminhome.php";
    <?php 
	 }
mysql_close($con);
?>