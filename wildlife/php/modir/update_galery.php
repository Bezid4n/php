<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("../db.php");

$title=$_POST['title'];
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/galery/".$_FILES['pic']['name'];
$path2="pic/galery/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `galery` SET `title` = '$title',`pic` = '$path2' where code='$id'";

 if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_galery.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
