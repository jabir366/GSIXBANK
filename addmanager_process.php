<?php
include('db.php');
extract($_POST);
$pwd= md5($password);
$sql="insert into managerdetails(username,name,gender,dob,address,phno,branch) values('$username','$name','$gender','$dob','$address',$phno,'$branch')";
 $res=mysql_query($sql,$con);
 $sql2="insert into users(username,password,type) values('$username','$pwd','manager')";
$res2=mysql_query($sql2,$con);
if($res) { 
?>
 <script language="javascript">
	alert("Sucessfully Added manager....");
	window.location="adminhome.php";
</script>
    <?php 
	}
	 else
	 {
	?>
 <script language="javascript">
	alert("Adding manager Failed...Please try again...");
	window.location="adminhome.php";
    <?php 
	 }
mysql_close($con);
?>