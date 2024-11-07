<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 $title=$_POST['title'];
 $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/galery/".$_FILES['pic']['name'];
 $path2="pic/galery/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name,$path);
  
  include("../db.php");
  
 $query="INSERT INTO `galery` ( `code` , `pic` , `title`) VALUES ('','$path2','$title')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("عکس به خوبی ارسال شد");
    window.location="manager.php?page_name=galery"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
