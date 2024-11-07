<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 $type=$_POST['type1'];
  
  include("../db.php");
  
  $query2="select * from type_animal where type='$type'";
  $result=mysqli_query($link,$query2);
  $num=mysqli_num_rows($result);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert(".قبلا این نوع حیوان ثبت شده است");
	window.location="manager.php?page_name=wildlife";
	</script>
	
<?php  } else {
  
 $query="INSERT INTO `type_animal` ( `code` , `type` ) VALUES ('','$type')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("نوع حیوان مورد نظر به خوبی ارسال شد");
    window.location="manager.php?page_name=wildlife"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>
