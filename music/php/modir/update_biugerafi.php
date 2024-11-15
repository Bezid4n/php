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
$text=$_POST['text'];
  
$id=$_GET['id'];
$query="UPDATE `biugerafi` SET `title` = '$title',`text` = '$text' where code='$id'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_biugerafi.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
