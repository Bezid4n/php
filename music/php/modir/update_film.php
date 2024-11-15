<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با ديتابيس");

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

 move_uploaded_file($temp_name_fd,$path_fd);
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/film/".$_FILES['pic']['name'];
$path2="pic/film/".$_FILES['pic']['name'];

 
  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `film` SET `title` = '$title',`name` = '$name',`artist` = '$artist',`director` = '$director',`mahsoul` = '$mahsoul',`file` = '$path2_fd',`pic` = '$path2',`kholase` = '$kholase',`size` = '$size'
        where code='$id'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_film.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
