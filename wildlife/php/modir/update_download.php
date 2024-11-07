<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("../db.php");

$name=$_POST['name'];
$desc=$_POST['desc'];

$temp_name_fd=$_FILES['file']['tmp_name'];
$path_fd="../../download/".$_FILES['file']['name'];
$path2_fd="download/".$_FILES['file']['name'];
$size=$_FILES['file']['size'];
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/upload_download/".$_FILES['pic']['name'];
$path2="pic/upload_download/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name_fd,$path_fd);
  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `download` SET `name` = '$name',`pic` = '$path2',`file` = '$path2_fd',`desc` = '$desc'
        where code='$id'";

 if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_download.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
