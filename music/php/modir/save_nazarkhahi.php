<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
  $question=$_POST['question'];
  $test1=$_POST['test1'];
  $test2=$_POST['test2'];
  $test3=$_POST['test3'];
  $test4=$_POST['test4'];

  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  $q="SELECT * FROM `nazarsanji`";
  $r=mysql_db_query("music",$q,$link);
  $ro=mysql_fetch_array($r);
  if($ro>1)
  { 	
?>
	<script language="javascript" type="text/javascript">
	alert("سوال نظرسنجی قبلا ثبت شده!");
	window.location="manager.php?page_name=nazarkhahi";
	</script>
    
<?php  } else {
  
 $query="INSERT INTO `nazarsanji` ( `code` , `question` , `test1` , `test2` , `test3` , `test4`) 
						VALUES ('','$question','$test1','$test2','$test3','$test4')";
 $query1="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test1','0')";
 $query2="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test2','0')";
 $query3="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test3','0')";
 $query4="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test4','0')";

 if(mysql_db_query("music",$query,$link)){
  if(mysql_db_query("music",$query1,$link)){
   if(mysql_db_query("music",$query2,$link)){
    if(mysql_db_query("music",$query3,$link)){
	 if(mysql_db_query("music",$query4,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("سوال نظرخواهی ثبت شد");
    window.location="manager.php?page_name=nazarkhahi"
   </script>
  <?php 
  }}}}}}  ?>
<body>
</body>
</html>
