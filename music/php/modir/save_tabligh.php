<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 $name=$_POST['name'];
 $link1=$_POST['link'];
 
 $temp_name=$_FILES['tabligh']['tmp_name'];
 $path="../../tabligh/".$_FILES['tabligh']['name'];
 $path2="tabligh/".$_FILES['tabligh']['name'];
  
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
   move_uploaded_file($temp_name,$path);

 $query="INSERT INTO `tablighat` ( `code` , `pic`, `name`, `link` ) VALUES ('','$path2','$name','$link1')";
						
  if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("ارسال به خوبی انجام شد");
    window.location="manager.php?page_name=tablighat"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
