<?php
error_reporting(0);
include('db.php');
extract($_POST);
$pwd= md5($password);
$sql="insert into userdetails(username,name,guardian,gender,address,dob,phno,account,branch,email) values('$emailid','$name','$guardian','$gender','$paddress','$dob',$phno,'$acctype','$branch','$emailid')";
 $res=mysql_query($sql,$con);
 $sql2="insert into users(username,password,type) values('$emailid','$pwd','customer')";
$res2=mysql_query($sql2,$con);
if($res) { 
?>
 <script language="javascript">
	alert("Sucessfully registred please log in...!");
	window.location="loginpage.php";
</script>
    <?php 
	}
	 else
	 {
	?>
 <script language="javascript">
	alert("Signup Failed...Please try again...");
	window.location="signup.php";
</script>
    <?php 
	 }
mysql_close($con);
?>