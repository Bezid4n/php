<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $name=$_POST['name'];
  $family=$_POST['family'];
  $title=$_POST['title'];
  $email=$_POST['email'];
  $text=$_POST['text'];
    
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
if(!ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$',$email))
	{ ?>
	<script language="javascript" type="text/javascript">
	alert("ایمیل اعتبار ندارد! ایمیل با اعتبار وارد کنید");
	window.location="../index.php?page_name=contact_me";
	</script>
    
<?php  } else {

 $query="INSERT INTO `contact_me` ( `code` , `name` , `family` , `title` , `email` , `text`) 
						VALUES ('','$name','$family','$title','$email','$text')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("ارسال با موفقیت انجام شد");
    window.location="../index.php?page_name=contact_me"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>