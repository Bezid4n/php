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

mysql_select_db("zargar");

$text=$_POST['text'];
$hulf_txt=$_POST['text'];
  
$id=$_GET['id'];
$query="UPDATE `about_me` SET `text` = '$text',`hulf_txt` = '$hulf_txt' where id='$id'";

 if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="manager.php?page_name=about_me";
   </script>
  <?php }   ?>
<body>
</body>
</html>
