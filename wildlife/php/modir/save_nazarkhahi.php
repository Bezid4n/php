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

  include("../db.php");
  
 $query="INSERT INTO `nazarsanji` ( `code` , `question` , `test1` , `test2` , `test3` , `test4`) 
						VALUES ('','$question','$test1','$test2','$test3','$test4')";
 $query1="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test1','0')";
 $query2="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test2','0')";
 $query3="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test3','0')";
 $query4="INSERT INTO `result_nazar` ( `title` , `num`) VALUES ('$test4','0')";

 if(mysqli_query($link,$query)){
  if(mysqli_query($link,$query1)){
   if(mysqli_query($link,$query2)){
    if(mysqli_query($link,$query3)){
	 if(mysqli_query($link,$query4)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("سوال نظرخواهی ثبت شد");
    window.location="manager.php?page_name=nazarkhahi"
   </script>
  <?php 
  }}}}}   ?>
<body>
</body>
</html>
