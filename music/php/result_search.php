<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$link=mysql_connect("localhost","root","");

if (!$link)
die ("اشكال در ارتباط با پایگاه داده!");

$title=$_POST['title'];
$type=$_POST['type'];

$query1="SELECT * FROM type_music WHERE type = '$type'";
$result1=mysql_db_query("music",$query1,$link);
$row1=mysql_fetch_array($result1);
$mtype=$row1['mtype'];

$query="SELECT * FROM sabt_music WHERE mtype='$mtype'";
$result=mysql_db_query("music",$query,$link);

include("../html/css.html");?>
<body>
  <?php while($row=mysql_fetch_array($result)) {
		 if($row['title']==$title){?>
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="center" dir="rtl" bgcolor="#009933"><?php echo $row['desc']?></td>
	 </tr>
	 <tr>
	  <td align="center" dir="rtl">
	   <img src="../<?php echo $row['pic']?>" width="400" height="500"/></td>
	 </tr>
	 <tr>
	  <td align="right" dir="rtl" valign="top">
	   <font face="Tahoma, Arial" size="2" >حجم فایل :</font><?php echo $row['size']?><font dir="ltr">&nbsp;B</font></td>
	 </tr>
	 <tr>
      <?php if(!$_SESSION['user']) {?>
      <td align="center" dir="rtl" valign="top" bgcolor="#009933">
       <font face="Courier New, Courier, monospace" size="2" color="#FF0000">برای دانلود باید عضو شوید!</font>
      </td>
      <?php } else {?>
	  <td align="center" dir="rtl" valign="top" bgcolor="#009933"><a href="<?php echo $row['file']?>">       <img src="../pic/d2.png" width="15" height="15" border="0"/></a>
	   <a href="<?php echo $row['file']?>">دانلود </a>
      </td>
      <?php }?>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>
    <?php } } ?>
</body>
</html>