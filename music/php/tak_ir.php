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


$query="SELECT * FROM `sabt_music` WHERE mtype = 't_i'";

$result=mysql_db_query("music",$query,$link);
?>
<body>
 <table border="0" cellspacing="2" cellpadding="0" width="100%">
   <?php while($row=mysql_fetch_array($result)) { ?>
  <tr>
   <td width="100%">
    <table border="0" cellspacing="0" width="100%" cellpadding="0">
	 <tr>
	  <td background="pic/tbl/post-tb.gif" align="right">
       <font face="Tahoma, Geneva, sans-serif" size="2" color="#CCCCCC">
	    <?php echo $row['title']?></font>
      </td>
     </tr>
     <tr>
	  <td background="pic/tbl/post_dt.png" align="center" dir="rtl" valign="top" >
	   <font color="#666666" size="1"><?php echo $row['day']; ?>&nbsp;<?php echo $row['moth']; ?>&nbsp;<?php echo $row['year']; ?></font>
      </td>
     </tr>
     <tr>
      <td align="center" dir="rtl" valign="top">
	   <font face="Arial, Helvetica, sans-serif" size="2"><?php echo $row['desc']?></font>
      </td>
     </tr>
     <tr>
      <td align="center" dir="rtl" valign="top">
	   <img src="<?php echo $row['pic']?>" width="400" height="500" />
      </td>
     </tr>
     <tr>
	  <td background="pic/tbl/pstbox.png">
       <a href="index.php?page_name=show_music&id=<?php echo $row['code']?>">
	   <img src="pic/d1.png" width="15" height="15" border="0"/></a>
       <a href="index.php?page_name=show_music&id=<?php echo $row['code']?>">دانلود و توضیحات بیشتر</a>
      </td>
     </tr>
	</table>
   </td>
  </tr>
  <?php } ?>
 </table>
</body>
</html>
