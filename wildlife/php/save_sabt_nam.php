<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$name_karbari=$_POST['name_karbari'];
$pass=md5($_POST['pass']);
$rpass=$_POST['rpass'];
$email=$_POST['email'];
$name=$_POST['name'];
$family=$_POST['family'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$day=$_POST['day'];
$moth=$_POST['moth'];
$year=$_POST['year'];

$temp_name=$_FILES['pic']['tmp_name'];
 $path="../pic/user/".$_FILES['pic']['name'];
 $path2="../../pic/user/".$_FILES['pic']['name'];
 
 move_uploaded_file($temp_name,$path);
   
include("db.php");

if(empty($sex)) $sex=2;

$query2="select * from sabt_nam where name_karbari='$name_karbari'";
	
	$result=mysqli_query($link,$query2);
	$row=mysqli_fetch_array($result);
	$num=mysqli_num_rows($result);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert(".نام کاربری تکراری می باشد! لطفا یک نام کاربری دیگر انتخاب کنید");
	window.location="../home.php?page_name=sabt_nam";
	</script>
	
<?php  } else {
$query="INSERT INTO sabt_nam (code,name_karbari,pass,name,family,day,moth,year,pic,sex,email,address)
        VALUES           	('','$name_karbari','$pass','$name','$family','$day','$moth','$year','$path2','$sex','$email','$address')";	 

if(mysqli_query($link,$query);){?>
<script language="javascript" type="text/javascript">
alert("ثبت نام شما با موفقيت انجام شد");
window.location="../home.php?page_name=sabt_nam"
</script>

<?php } } ?>
<body>
</body>
</html>
