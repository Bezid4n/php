<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$ch=1;
if($_POST['name']==null)
	{
	?>
	<script language="javascript" type="text/javascript">
		alert("نام را وارد کن");
		
		window.location="manager.php?page_name=mahsolat";
		</script>
		<?php
		$ch=0;}
		if($_POST['fi']==null)
	{
	?>
	<script language="javascript" type="text/javascript">
		alert("قیمت را وارد کن");
		
		window.location="manager.php?page_name=mahsolat";
		</script>
		<?php
		$ch=0;}
			if($_POST['vazn']==null)
	{
	?>
	<script language="javascript" type="text/javascript">
		alert("وزن را وارد کن");
		
		window.location="manager.php?page_name=mahsolat";
		</script>
		<?php
		$ch=0;}
		
	if ($ch>0)
	{
$link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  $ayar=$_POST['ayar'];
  $type=$_POST['typem'];
  $name=$_POST['name'];
  $date=$_POST['date'];
  $fi=$_POST['fi'];
  $vazn=$_POST['vazn'];
  $temp_name=$_FILES['pic']['tmp_name'];

   mysql_select_db("zargar");
  
  $query2="select * from `type_m` where `t_type`='$type'";
 $result2=mysql_query("$query2");
 $row2=mysql_fetch_array($result2);
 $t_id=$row2['t_id'];
  
  $path="../../pic/mahsolat/".$_FILES['pic']['name'];
  $path2="pic/mahsolat/".$_FILES['pic']['name'];
  move_uploaded_file($temp_name,$path);
  
  $query3="select * from `mahsolat` where m_name='$name' and t_id='$t_id'";
  $result3=mysql_query("$query3");
	$num=mysql_num_rows($result3);
	
	
if ($num>0) 
{ 
	
?>
	<script language="javascript" type="text/javascript">
	alert("محصول مورد نظر قبلا ثبت شده است!");
	window.location="manager.php?page_name=mahsolat";
	</script>
	<?php } elseif(strlen($ayar)<> 3){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("عیار یک عدد 3 رقمی می باشد!");
    window.location="manager.php?page_name=mahsolat"
   </script>
  <?php 
  }else { 

 $query="INSERT INTO `mahsolat` (`m_id`, `t_id`, `m_name`, `m_ayar`, `m_pic`, `m_fi`, `m_vazn`, `m_date`) VALUES ('', '$t_id', '$name', '$ayar', '$path2', '$fi', '$vazn', '$date')";
 
 					
  if(mysql_query("$query")){
  ?>
   <script language="JavaScript" type="text/JavaScript">
    alert("محصول جدید ثبت شد");
    window.location="manager.php?page_name=mahsolat"
   </script>
  <?php 
  }}
  }?>
<body>
</body>
</html>