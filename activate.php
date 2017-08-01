<?php
  include ('db.php');
  $uname= $_GET['uname'];
  $sql="update users set status='active' where username='$uname'" ;
  if($res=mysql_query($sql,$con))
  {
  ?>
    <script language="javascript">
	alert("Operation done....!!");
	window.location="userview.php";
	</script>
    <?php
  }
  ?>