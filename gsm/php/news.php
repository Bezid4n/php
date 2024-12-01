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


$query="SELECT * FROM `news` ORDER BY `code` DESC LIMIT 0 , 20";

$result=mysql_db_query("gsm",$query,$link);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/news.jpg" width="100%" height="50">
   </td>
  </tr>
   <?php
	while($row=mysql_fetch_array($result))
	 {?>
  <tr>
   <td width="100%">
    <table border="0" cellpadding="0" width="100%" cellspacing="0">
     <tr>
      <td>
       <table border="0" cellspacing="0" width="100%">
	    <tr>
	     <td align="right" colspan="2" width="20%" dir="rtl">
	      <a href="index.php?page_name=show_news&id_news=<?php echo $row['code'] ?>"><?php echo $row['title']?></a>
         </td>
	    </tr>
        <tr>
	     <td align="right" dir="rtl" valign="top" width="73%">
	      <font color="#999999" dir="rtl"><?php echo $row['hulf_txt']?> ...</font>
         </td>
        </tr>
	    <tr>
	     <td align="left" colspan="2" dir="rtl">
	      <font color="#666666" size="1"><?php echo $row['date']?></font>
         </td>
	    </tr>
	  </table>
     </td>
	 <td align="right" colspan="3" width="75"><img src="<?php echo $row['pic']?>" width="70" height="100"/></td>
	 </tr>
	 <tr><td><br /></td></tr>
	</table>	
   </td>
  </tr>
  <?php } ?>
 </table>
</body>
</html>
