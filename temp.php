<?php
include('db.php');
$user=$_POST['t1'];
$pwd=md5($_POST['t2']);
$acc=($_POST['account_type']);
$sql="select * from users where username='$user' and password='$pwd'";
$res=mysql_query($sql,$con);
if($r=mysql_fetch_array($res))
{
		
		if($acc=="admin")
		{
			session_start();
		$_SESSION['username']=$r[0];
			header('location:adminhome.php');
		}
		else if($acc=="manager")
		{
			session_start();
		$_SESSION['username']=$r[0];
		$sql="select branch from managerdetails where username='$user'";
		$res1=mysql_query($sql,$con);
		$r1=mysql_fetch_array($res1);
		$_SESSION['branch']=$r1[0];
			header('location:managerhome.php');
		}
		else if($acc=="customer")
		{
			if($r[4]=="active")
			{
				session_start();
		$_SESSION['username']=$r[0];
				header('location:userhome.php');
			}
			else
			{
				 ?>
    <script language="javascript">
	alert("Waiting for manager to approve.Please login later....");
	window.location="loginpage.php";
	</script>
    <?php
			}
		
		}
}
else
{
	 ?>
    <script language="javascript">
	alert("Invalid Username/Password");
	window.location="loginpage.php";
	</script>
    <?php
}
?>





<?php
include('db.php');
$user=$_POST['t1'];
$pwd=md5($_POST['t2']);
$acc=($_POST['account_type']);
echo $sql="select * from users where username='$user' and password='$pwd' where type = '$acc'";
$res=mysql_query($sql,$con);
if($r=mysql_fetch_array($res))
{
		
		if($acc=="admin")
		{
			session_start();
		$_SESSION['username']=$r[0];
			header('location:adminhome.php');
		}
		else if($acc=="manager")
		{
			session_start();
		$_SESSION['username']=$r[0];
		$sql="select branch from managerdetails where username='$user'";
		$res1=mysql_query($sql,$con);
		$r1=mysql_fetch_array($res1);
		$_SESSION['branch']=$r1[0];
			header('location:managerhome.php');
		}
		else if($acc=="customer")
		{
			if($r[4]=="active")
			{
				session_start();
		$_SESSION['username']=$r[0];
				header('location:userhome.php');
			}
			else
			{
				 ?>
    <script language="javascript">
	alert("Waiting for manager to approve.Please login later....");
	window.location="loginpage.php";
	</script>
    <?php
			}
		
		}
}
else
{
	 ?>
    <script language="javascript">
	alert("Invalid Username/Password");
	//window.location="loginpage.php";
	</script>
    <?php
}
?>