<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 $title=$_POST['title'];
 $link1=$_POST['link'];
 $temp_name=$_FILES['baner']['tmp_name'];
 $path="../../pic/baner/".$_FILES['baner']['name'];
 $path2="pic/baner/".$_FILES['baner']['name'];
  move_uploaded_file($temp_name,$path);
  
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="INSERT INTO `baner` ( `code` , `pic`, `title`, `link`) VALUES ('','$path2','$title','$link1')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("بنر به خوبی ارسال شد");
    window.location="manager.php?page_name=baner"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
