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
 $m=0;
 $query2="select * from `mahsolat`";
 $result2=mysql_query("$query2");

 while($row2=mysql_fetch_array($result2)){
  foreach($_POST['chkbx'] as $k => $v){
	if($v==$row2['t_id']){ 
	 $m=1;?>
      <script language="JavaScript" type="text/JavaScript">
            alert("نوع مورد نظر در جدول محصولات مقدار دارد!");
            window.location="manager.php?page_name=type_m"
       </script>
 <?php } } }
       if($m==0){
		foreach($_POST['chkbx'] as $key => $val){
			$query = "DELETE FROM `type_m` WHERE t_id=$val";
			mysql_query("$query");
		}
						
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("نوع مورد نظر حذف شد");
    window.location="manager.php?page_name=type_m"
   </script>
  <?php }
  else
  {  ?>
   <script language="JavaScript" type="text/JavaScript">
  alert("نوعی را انتخاب کنید");
    window.location="manager.php?page_name=type_m"
   </script>
  <?php }
  } ?>
<body>
</body>
</html>
