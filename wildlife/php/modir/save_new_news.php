<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $title=$_POST['title'];
  $text=$_POST['text'];
  $date=$_POST['date'];
  $temp_name=$_FILES['pic']['tmp_name'];
  
  $path="../../pic/upload_news/".$_FILES['pic']['name'];
  $path2="pic/upload_news/".$_FILES['pic']['name'];
  move_uploaded_file($temp_name,$path);
  
  include("../db.php");

 $query="INSERT INTO `news` ( `code` , `title` , `date` , `pic` , `text` ) 
						VALUES ('','$title','$date','$path2','$text')";
						
  if(mysqli_query($link,$query)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("خبر جدید ثبت شد");
    window.location="manager.php?page_name=send_new_news"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>