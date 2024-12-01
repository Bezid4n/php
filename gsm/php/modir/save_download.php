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
  
 $name=$_POST['name'];
 $majol=$_POST['majol'];
 $mobile=$_POST['mobile'];
 
 $query3="SELECT * FROM `majol` where name='$majol'";
 $result3=mysql_db_query("gsm",$query3,$link);
 $row3=mysql_fetch_array($result3);
 $majol1=$row3['code']; 
 
 $query4="SELECT * FROM `mobile` where name='$mobile'";
 $result4=mysql_db_query("gsm",$query4,$link);
 $row4=mysql_fetch_array($result4);
 $mobile1=$row4['code'];
 
 $temp_name_fd=$_FILES['file']['tmp_name'];
 $path_fd="../../download/".$_FILES['file']['name'];
 $path2_fd="download/".$_FILES['file']['name'];
 $size=$_FILES['file']['size'];
 
 $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/upload_download/".$_FILES['pic']['name'];
 $path2="pic/upload_download/".$_FILES['pic']['name'];

  move_uploaded_file($temp_name_fd,$path_fd);
  move_uploaded_file($temp_name,$path);
  
 $query="INSERT INTO `download` ( `code` , `pic`, `title`, `file`, `cod_majol`, `size`, `cod_mob`)
                         VALUES ('','$path2','$name','$path2_fd','$majol1','$size','$mobile1')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("فایل به خوبی ارسال شد");
    window.location="manager.php?page_name=download"
   </script>
  <?php 
  }   ?>
<body>
</body>
</html>
