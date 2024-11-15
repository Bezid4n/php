<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $user=$_POST['user'];
  $user_new=$_POST['user_new'];
  $pass=$_POST['pass'];

  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  $query2="select * from modir";
  $result2=mysql_db_query("music",$query2,$link);
  $row2=mysql_fetch_array($result2);
  if($user!=$row2['user_name']){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("! نام کاربری قبلی صحیح نمی باشد");
    window.location="manager.php?page_name=change_user_pass"
   </script>
  <?php } else {
 $query3="delete from modir";
 mysql_db_query("music",$query3,$link);
 $query="INSERT INTO `modir` ( `code` , `user_name` , `pass`) 
						VALUES ('','$user_new',md5('$pass'))";
						
  if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("نام کاربری و رمز ورود تغییر کرد");
    window.location="manager.php?page_name=change_user_pass"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>
