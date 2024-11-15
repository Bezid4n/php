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
   
 $title=$_POST['title'];
 
 $temp_name_fd=$_FILES['file']['tmp_name'];
 $path_fd="../../post/".$_FILES['file']['name'];
 $path2_fd="post/".$_FILES['file']['name'];
 
 $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/post/".$_FILES['pic']['name'];
 $path2="pic/post/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name_fd,$path_fd);
  move_uploaded_file($temp_name,$path);
  
 $query="INSERT INTO `post` ( `code` , `title` , `file`, `pic`)
                         VALUES ('','$title','$path2_fd','$path2')";
						
  if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("فایل به خوبی ارسال شد");
    window.location="manager.php?page_name=send_post"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
