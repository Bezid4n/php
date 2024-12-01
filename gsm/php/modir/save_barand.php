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

  $barand=$_POST['barand'];
  $temp_name=$_FILES['pic']['tmp_name'];
 $path="../../pic/barand/".$_FILES['pic']['name'];
 $path2="pic/barand/".$_FILES['pic']['name'];

   move_uploaded_file($temp_name,$path);
  
  $query2="select * from type_mob where barand='$barand'";
	
	$result=mysql_db_query("gsm",$query2,$link);
	$row=mysql_fetch_array($result);
	$num=mysql_num_rows($result);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("برند مورد نظر قبلا ثبت شده است!");
	window.location="manager.php?page_name=mobile";
	</script>
	<?php } else {
  
 $query="INSERT INTO `type_mob` ( `code` , `barand`, `pic` ) VALUES ('','$barand','$path2')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("برند به خوبی ارسال شد");
    window.location="manager.php?page_name=mobile"
   </script>
  <?php 
  }  } ?>
<body>
</body>
</html>
