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
  
 
 $query2="SELECT `file` , `pic` FROM `sabt_music` where code='$id'";
  $result2=mysql_db_query("music",$query2,$link);
  $row2=mysql_fetch_array($result2);
 $pic="../../".$row2['pic'];
 $file="../../".$row2['file'];
  
 $query="DELETE FROM `sabt_music` where code='$id'";
						
  if(mysql_db_query("music",$query,$link)){
  unlink($pic);
  unlink($file);
  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("فایل مورد نظر حذف شد");
    window.location="manager.php?page_name=send_music"
   </script>
  <?php } ?>
<body>
</body>
</html>
