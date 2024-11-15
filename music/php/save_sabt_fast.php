<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$name_karbari=$_POST['shenase'];
$pass=md5($_POST['pass']);
$email=$_POST['email'];
$name=$_POST['name_asli'];
   
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

if(empty($sex)) $sex=2;

$query2="select * from sabt_nam where name_karbari='$name_karbari'";
	
	$result=mysql_db_query("music",$query2,$link);
	$row=mysql_fetch_array($result);
	$num=mysql_num_rows($result);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert(".نام کاربری تکراری می باشد! لطفا یک نام کاربری دیگر انتخاب کنید");
	window.location="../index.php";
	</script>
	
<?php  } elseif(!ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$',$email))
	{ ?>
	<script language="javascript" type="text/javascript">
	alert("ایمیل اعتبار ندارد! ایمیل با اعتبار وارد کنید");
	window.location="../index.php";
	</script>
	
<?php  } else {
$query="INSERT INTO sabt_nam (code,name_karbari,pass,name,sex,email)
        VALUES           	('','$name_karbari','$pass','$name','$sex','$email')";	 

if(mysql_db_query("music",$query,$link)){?>
<script language="javascript" type="text/javascript">
alert("ثبت نام شما با موفقيت انجام شد");
window.location="../index.php"
</script>

<?php } } ?>
<body>
</body>
</html>
