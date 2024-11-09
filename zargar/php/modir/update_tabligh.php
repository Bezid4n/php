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

$name=$_POST['name'];
$link1=$_POST['link'];
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../tabligh/".$_FILES['pic']['name'];
$path2="tabligh/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
 mysql_select_db("zargar");
 
 
$query="UPDATE `tablighat` SET `name` = '$name',`pic` = '$path2',`link` = '$link1' where id='$id'";

 if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="manager.php?page_name=tablighat";
   </script>
  <?php }   ?>
<body>
</body>
</html>
