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


$query="SELECT * FROM `download` ORDER BY `code` DESC LIMIT 0 , 10";

$result=mysql_db_query("gsm",$query,$link);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/game.jpg" width="100%" height="50">
   </td>
  </tr>
   <?php $i=1;
	while($row=mysql_fetch_array($result))
	 {?>
  <tr <?php if($i%2==0) echo 'bgcolor="#FF8888"';?>>
   <td width="100%">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="left" valign="middle">
	   <img src="<?php echo $row['pic']?>" width="150" height="150"/></td>
	  <td align="right" width="70%" dir="rtl" valign="top">
	   <font color="#999999"><b><?php echo $row['title']?></b></font><br/><br/>
	   <a href="index.php?page_name=download&id=<?php echo $row['code']?>">
	    <img src="pic/d1.png" width="15" height="15" border="0"/></a>
	    <a href="index.php?page_name=download&id=<?php echo $row['code']?>">دانلود و توضیحات بیشتر</a><br />
	   <font face="Tahoma, Arial" size="2">ماژول : 
	   <?php $majol=$row['cod_majol'];
	         $query2="SELECT * FROM majol WHERE code = $majol";
			 $result2=mysql_db_query("gsm",$query2,$link);
			 $row2=mysql_fetch_array($result2);
	    echo $row2['name']?></font><br />
	   <font face="Tahoma, Arial" size="2">گوشی :
	   <?php $mobile=$row['cod_mob'];
	         $query3="SELECT * FROM mobile WHERE code = $mobile";
			 $result3=mysql_db_query("gsm",$query3,$link);
			 $row3=mysql_fetch_array($result3);
	    echo $row3['name']?></font>
       </td>
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
