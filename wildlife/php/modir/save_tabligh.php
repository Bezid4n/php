<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 $name=$_POST['name'];
 $temp_name=$_FILES['tabligh']['tmp_name'];
 $path="../../tabligh/".$_FILES['tabligh']['name'];
 $path2="tabligh/".$_FILES['tabligh']['name'];
 $type=$_FILES['tabligh']['type'];
   $allowed_image_extension = array(
        "png",
        "jpg",
        "gif"
    );
	
	$file_extension = pathinfo($_FILES["tabligh"]["name"], PATHINFO_EXTENSION);
	
  include("../db.php");
  
 if(! in_array($file_extension, $allowed_image_extension)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("خطا در انتخاب فایل؛ لطفا برای تبلیغات فایل تصویر انتخاب کنید");
    window.location="manager.php?page_name=tablighat"
   </script>
  <?php }
  else {
   move_uploaded_file($temp_name,$path);

 $query="INSERT INTO `tablighat` ( `code` , `pic`, `name` ) VALUES ('','$path2','$name')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("فایل به خوبی ارسال شد");
    window.location="manager.php?page_name=tablighat"
   </script>
  <?php 
  }  } ?>
<body>
</body>
</html>
