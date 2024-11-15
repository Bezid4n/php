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
 $kholase=$_POST['kholase'];
 $name=$_POST['name'];
 $artist=$_POST['artist'];
 $director=$_POST['director'];
 $mahsoul=$_POST['mahsoul'];
 
 $temp_name_fd=$_FILES['file']['tmp_name'];
$path_fd="../../film/".$_FILES['file']['name'];
$path2_fd="film/".$_FILES['file']['name'];
$size=$_FILES['file']['size'];
 
 $temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/film/".$_FILES['pic']['name'];
$path2="pic/film/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name_fd,$path_fd);
  move_uploaded_file($temp_name,$path);
  
 $query="INSERT INTO `film` ( `code` , `title`, `name`, `artist`, `director`, `mahsoul`, `file`, `pic`, `kholase`, `size`)
                         VALUES ('','$title','$name','$artist','$director','$mahsoul','$path2_fd','$path2','$kholase','$size')";
						
  if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("فایل به خوبی ارسال شد");
    window.location="manager.php?page_name=send_film"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
