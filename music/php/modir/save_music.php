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
 $desc=$_POST['desc'];
 $type=$_POST['type'];
 $day=$_POST['day'];
 $moth=$_POST['moth'];
 $year=$_POST['year'];
 
 $query1="select * from type_music where type='$type'";
 $result1=mysql_db_query("music",$query1,$link);
 $row1=mysql_fetch_array($result1);
 $mtype=$row1['mtype'];
 
 $temp_name_fd=$_FILES['file']['tmp_name'];
 $path_fd="../../download/".$_FILES['file']['name'];
 $path2_fd="download/".$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 
 $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/upload_music/".$_FILES['pic']['name'];
 $path2="pic/upload_music/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name_fd,$path_fd);
  move_uploaded_file($temp_name,$path);
  
 $query="INSERT INTO `sabt_music` ( `code` , `title`, `day`, `moth`, `year`, `mtype`, `file`, `pic`, `desc`, `size`)
                         VALUES ('','$title','$day','$moth','$year','$mtype','$path2_fd','$path2','$desc','$size')";
						
  if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("فایل به خوبی ارسال شد");
    window.location="manager.php?page_name=send_music"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
