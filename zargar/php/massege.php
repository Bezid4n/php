<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $name=$_POST['name'];
  $massege=$_POST['massege'];
  
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  mysql_select_db("zargar");

 $query="INSERT INTO `massege` ( `id` , `name` , `massege` ) 
						VALUES ('','$name','$massege')";
						
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    window.location="../index.php"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>