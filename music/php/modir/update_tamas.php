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

$tell=$_POST['tell'];
$address=$_POST['address'];
$fax=$_POST['fax'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
  
$id=$_GET['id'];
$query="UPDATE `contact_me` SET `tell` = '$tell',`address` = '$address',`mobile` = '$mobile',`email` = '$email',`fax` = '$fax' where code='$id'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_tamas.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
