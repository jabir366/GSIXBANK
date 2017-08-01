<?php
  include ('db.php');
  $id= $_GET['id'];
  $sql="delete from branches where id='$id'" ;
  if($res=mysql_query($sql,$con))
  {
  ?>
    <script language="javascript">
	alert("Operation done....!!");
	window.location="adminhome.php";
	</script>
    <?php
  }
  ?>