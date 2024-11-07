<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 
 include("../db.php");
  
  $id=$_GET['id'];
  
 
 $query2="SELECT * FROM `wildlife` where code='$id'";
  $result2=mysqli_query($link,$query2);
  $row2=mysqli_fetch_array($result2);
 $pic="../../".$row2['pic'];
  
 $query="DELETE FROM `wildlife` where code='$id'";
						
  if(mysqli_query($link,$query)){
  
  unlink($pic);
  
  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("حذف به خوبی انجام شد");
    window.location="manager.php?page_name=wildlife"
   </script>
  <?php } ?>
<body>
</body>
</html>
