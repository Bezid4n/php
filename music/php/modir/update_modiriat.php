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
$email=$_POST['email'];

$id1=$_GET['id'];

 if(!ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$',$email))
	{ ?>
	<script language="javascript" type="text/javascript">
	alert("ایمیل اعتبار ندارد! ایمیل با اعتبار وارد کنید");
	window.location="edit_modiriat.php?id=<?php echo $id1?>";
	</script>
	
<?php  } else {
  
$query="UPDATE `modiriat` SET `name` = '$name',`email` = '$email' where code='$id1'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_modiriat.php";
   </script>
  <?php }} ?>
<body>
</body>
</html>
