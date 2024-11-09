<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$ch=1;
if($_POST['typem']==null)
	{
	?>
	<script language="javascript" type="text/javascript">
		alert("نوع را وارد کنید");
		
		window.location="manager.php?page_name=type_m";
		</script>
		<?php
		$ch=0;}
		if ($ch>0)
		{
 $type=$_POST['typem'];
  
  $link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 mysql_select_db("zargar");
 
  $query3="select * from `type_m` where t_type='$type'";
  $result3=mysql_query("$query3");
	$num=mysql_num_rows($result3);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("نوع محصول مورد نظر قبلا ثبت شده است!");
	window.location="manager.php?page_name=type_m";
	</script>
	<?php } else {
 
 $query="INSERT INTO `type_m` (`t_type` ) VALUES ('$type')";
						
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("ارسال به خوبی انجام شد");
    window.location="manager.php?page_name=type_m"
   </script>
  <?php 
  }  } 
  }
  ?>
<body>
</body>
</html>
