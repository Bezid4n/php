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
$date=$_POST['date'];
$hulf_txt=$_POST['text'];

$id=$_GET['id'];

$query2="SELECT pic FROM `barasi` where code='$id'";
  $result2=mysql_db_query("gsm",$query2,$link);
  $row2=mysql_fetch_array($result2);
 $pic="../../".$row2['pic'];
 unlink($pic);

$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/upload_barasi/".$_FILES['pic']['name'];
$path2="pic/upload_barasi/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name,$path);
  

$query="UPDATE `barasi` SET `title` = '$title',`pic` = '$path2',text='$text',hulf_text='$hulf_txt',date='$date' where code='$id'";

 if(mysql_db_query("gsm",$query,$link)){
	  
	 
	  
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_barasi.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>