<?php
  include ('db.php');
  $uname= $_GET['uname'];
  $sql="delete from users where username='$uname'" ;
  $sql2="delete from managerdetails where username='$uname'" ;
  if($res=mysql_query($sql,$con)&&$res=mysql_query($sql2,$con))
  {
  ?>
    <script language="javascript">
	alert("Operation done....!!");
	window.location="adminhome.php";
	</script>
    <?php
  }
  ?>