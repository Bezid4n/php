<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include("../db.php");

$name=$_POST['name'];
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../tabligh/".$_FILES['pic']['name'];
$path2="tabligh/".$_FILES['pic']['name'];

$allowed_image_extension = array(
        "png",
        "jpg",
        "gif"
    );
	
	$file_extension = pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION);
	
	if(! in_array($file_extension, $allowed_image_extension)){
	
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("خطا در انتخاب فایل؛ لطفا برای تبلیغات فایل تصویر انتخاب کنید");
    window.location="manager.php?page_name=tablighat";
   </script>
  <?php }
  else {

  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `tablighat` SET `name` = '$name',`pic` = '$path2' where code='$id'";

 if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="manager.php?page_name=tablighat";
   </script>
  <?php }   } ?>
<body>
</body>
</html>
