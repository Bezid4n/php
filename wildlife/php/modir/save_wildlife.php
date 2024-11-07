<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 include("../db.php");
   
 $animal=$_POST['animal'];
 $ostan=$_POST['ostan'];
 $type=$_POST['type'];
 $nejad=$_POST['nejad'];
 
 $query="select * from animal where animal='$animal'";
 $result=mysqli_query($link,$query);
 $row=mysqli_fetch_array($result);
 $code_animal=$row['code'];
 
 $query1="select code from ostan where ostan='$ostan'";
 $result1=mysqli_query($link,$query1);
 $row1=mysqli_fetch_array($result1);
 $code_ostan=$row1['code'];
 
 $query2="select code from type_animal where type='$type'";
 $result2=mysqli_query($link,$query2);
 $row2=mysqli_fetch_array($result2);
 $code_type=$row2['code'];
 
 $query3="select code from nejad_animal where nejad='$nejad'";
 $result3=mysqli_query($link,$query3);
 $row3=mysqli_fetch_array($result3);
 $code_nejad=$row3['code'];

 $sen=$_POST['sen'];
 
 $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/animal/".$_FILES['pic']['name'];
 $path2="pic/animal/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name,$path);
   
 $query="INSERT INTO `wildlife` ( `code` , `code_ostan`, `code_animal`, `code_type`, `code_nejad`, `sen`, `pic` ) VALUES ('','$code_ostan','$code_animal','$code_type','$code_nejad','$sen','$path2')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("ارسال به خوبی انجام شد");
    window.location="manager.php?page_name=wildlife"
   </script>
  <?php 
  } ?>
<body>
</body>
</html>
