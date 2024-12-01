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

  $barand=$_POST['barand1'];
  $mobile=$_POST['mobile'];
  $ghimat=$_POST['ghimat'];
  $temp_name=$_FILES['pic1']['tmp_name'];
 $path="../../pic/mobile/".$_FILES['pic1']['name'];
 $path2="pic/mobile/".$_FILES['pic1']['name'];
 
 $query2="select * from type_mob where barand='$barand'";
 $result2=mysql_db_query("gsm",$query2,$link);
 $row2=mysql_fetch_array($result2);
 $cod_barand=$row2['code'];
  
   move_uploaded_file($temp_name,$path);
   
    $query3="select * from mobile where name='$mobile'";
	
	$result=mysql_db_query("gsm",$query3,$link);
	$row=mysql_fetch_array($result);
	$num=mysql_num_rows($result);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("گوشی مورد نظر قبلا ثبت شده است!");
	window.location="manager.php?page_name=mobile";
	</script>
	<?php } else {
  
 $query="INSERT INTO `mobile` ( `code` , `cod_barand`, `name`, `pic`, `ghimat` ) VALUES ('','$cod_barand','$mobile','$path2','$ghimat')";
						
  if(mysql_db_query("gsm",$query,$link)){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("گوشی به خوبی ارسال شد");
    window.location="manager.php?page_name=mobile"
   </script>
  <?php 
  } }  ?>
<body>
</body>
</html>
