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


$query="SELECT * FROM `type_mob`";

$result=mysql_db_query("gsm",$query,$link);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
   <td align="center" colspan="2">
	<img src="pic/tbl/barand.jpg" width="100%" height="50">
   </td>
  </tr>
    <?php
	while($row=mysql_fetch_array($result))
	 {?>
  <tr>
   <td width="100%">
    <table border="0" cellpadding="0" width="100%" cellspacing="0">
     <tr>
      <td align="center">
       <a href="index.php?page_name=mobile&id=<?php echo $row['code'] ?>">
        <img src="<?php echo $row['pic']?>" width="200" height="100" border="0" alt="<?php echo $row['barand']?>"/></a>
      </td>
     </tr>
	</table>	
   </td>
  </tr>
   <?php } ?>
 </table>
</body>
</html>
