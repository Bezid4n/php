<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
 include("../db.php");
  
 $query="DELETE FROM `nazarsanji`";
 $query1="DELETE FROM `result_nazar`";
						
  if(mysqli_query($link,$query)){
   if(mysqli_query($link,$query1)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("نظرخواهی قبلی خذف شد");
    window.location="manager.php?page_name=nazarkhahi"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>
