<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$nazar=$_POST['nazar'];

$link=mysql_connect("localhost","root","");
if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

if (!empty($nazar)) 
{
  $nazar = addslashes($nazar); 
  $query = "UPDATE `result_nazar` SET num = num + 1 where title='$nazar'";
  $result=mysql_db_query("music",$query,$link);
  
  if($result){?>
  <script language="javascript" type="text/javascript">
   alert("ارسال با موفقيت انجام شد");
   window.location="../index.php?page_name=index"
  </script>
<?php }}else {?>
  <script language="javascript" type="text/javascript">
   alert("لطفا گزینه مورد نظر را انتخاب کنید");
   window.location="../index.php?page_name=index"
  </script> 
<?php }?>
<body>
</body>
</html>