<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 
  $link=mysql_connect("localhost","root","");
 
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  $id=$_GET['id'];
  mysql_select_db("zargar");
  
 $query="DELETE FROM `massege` where id='$id'";
						
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("پیغام مورد نظر حذف شد");
    window.location="manager.php?page_name=delete_massege"
   </script>
  <?php } ?>
<body>
</body>
</html>
