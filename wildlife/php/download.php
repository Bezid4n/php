<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
 <?php
include("db.php");	


$query="SELECT * FROM `download` ORDER BY `code` DESC LIMIT 0 , 10";

$result=mysqli_query($link,$query);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td bgcolor="#FF6600" colspan="2" align="right">
    <font size="5" face="Courier New, Courier, monospace"><b>دانلود</b></font>
   </td>
  </tr>
   <?php $i=1;
	while($row=mysqli_fetch_array($result))
	 {?>
  <tr <?php if($i%2==0) echo 'bgcolor="#FF8888"';?>>
   <td width="100%">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="left" valign="middle">
	   <img src="<?php echo $row['pic']?>" width="150" height="150"/></td>
	  <td align="right" width="70%" dir="rtl" valign="top">
	   <font color="#999999"><b><?php echo $row['name']?></b></font><br/><br/>
	   <a href="home.php?page_name=show_download&id=<?php echo $row['code']?>">
	    <img src="pic/d1.png" width="15" height="15" border="0"/></a>
	    <a href="home.php?page_name=show_download&id=<?php echo $row['code']?>">دانلود و توضیحات بیشتر</a></td>
	 </tr>
	</table>
    </font>
   </td>
   <?php $i++ ?>
  </tr>
  <?php } ?>
 </table>
</body>
</html>
