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

 move_uploaded_file($temp_name_fd,$path_fd);
 
$temp_name=$_FILES['pic']['tmp_name'];
$path="../../pic/upload_music/".$_FILES['pic']['name'];
$path2="pic/upload_music/".$_FILES['pic']['name'];

 
  move_uploaded_file($temp_name,$path);
  
$id=$_GET['id'];
$query="UPDATE `sabt_music` SET `title` = '$title',`day` = '$day',`moth` = '$moth',`year` = '$year',`mtype` = '$mtype',`file` = '$path2_fd',`pic` = '$path2',`desc` = '$desc',`size` = '$size'
        where code='$id'";

 if(mysql_db_query("music",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_music.php";
   </script>
  <?php }   ?>
<body>
</body>
</html>
