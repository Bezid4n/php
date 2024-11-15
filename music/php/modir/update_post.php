<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

$title=$_POST['title'];
 
$temp_name_fd=$_FILES['file']['tmp_name'];
$path_fd="../../post/".$_FILES['file']['name'];
$path2_fd="post/".$_FILES['file']['name'];

 move_uploaded_file($temp_name_fd,$path_fd);
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/post/".$_FILES['pic']['name'];
$path2="pic/post/".$_FILES['pic']['name'];

 
  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `post` SET `title` = '$title',`file` = '$path2_fd',`pic` = '$path2' where code='$id'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_post.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
