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

$question=$_POST['question'];
$test1=$_POST['test1'];
$test2=$_POST['test2'];
$test3=$_POST['test3'];
$test4=$_POST['test4'];
  
$id=$_GET['id'];
$query="UPDATE `nazarsanji` SET `question` = '$question',`test1` = '$test1',`test2` = '$test2',`test3` = '$test3',`test4` = '$test4' where code='$id'";

$query0="DELETE FROM `result_nazar`";
$query1="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test1','0')";
$query2="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test2','0')";
$query3="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test3','0')";
$query4="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test4','0')";

 if(mysql_db_query("music",$query,$link)){
  if(mysql_db_query("music",$query0,$link)){
  if(mysql_db_query("music",$query1,$link)){
   if(mysql_db_query("music",$query2,$link)){
    if(mysql_db_query("music",$query3,$link)){
	 if(mysql_db_query("music",$query4,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("به روز رسانی انجام شد");
    window.location="edit_nazarkhahi.php";
   </script>
  <?php }}}}}}  ?>
<body>
</body>
</html>
