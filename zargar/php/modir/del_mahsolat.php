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
 
 mysql_select_db("zargar");
  
		foreach($_POST['chkbx'] AS $key => $val){
			$query = "DELETE FROM `mahsolat` WHERE m_id=$val";
			mysql_query("$query");
		}
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("محصول مورد نظر حذف شد");
    window.location="manager.php?page_name=mahsolat"
   </script>
  <?php } ?>
<body>
</body>
</html>