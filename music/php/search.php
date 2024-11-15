<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form7u()
{
	if(document.getElementById('title').value=="")
	{
		alert("نام آهنگ را وارد کنید");
		document.getElementById('title').focus();
		return false;
	}
return true;
}
</script>
<?php
  $link=mysql_connect("localhost","root","");
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
 $query="SELECT * FROM `type_music`";
 $result=mysql_db_query("music",$query,$link);
 
?>
<body>
 <table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
      <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
      <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom" align="center"><font size="2">جستجو</font></td>
      <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
  </tr>
  <tr>
   <td colspan="3">
	<form action="php/result_search.php" method="post" onsubmit="javascript:return check_form7u();" enctype="multipart/form-data" target="_blank">
	<table border="0" width="100%" cellspacing="0" bgcolor="#333333">
	 <tr>
	  <td>
	   <table border="0" cellspacing="0" width="100%">
	    <tr>
         <td align="left">
	      <input name="title" type="text" size="15%"/>
          <font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">نام آهنگ :</font>
         </td>
	     <td align="right">
	      <select name="type" dir="rtl"><?php while($row=mysql_fetch_array($result)) {?>
           <option><?php echo $row['type']; ?></option> <?php }?>
          </select>
	      <font face="Tahoma, Arial" size="2" dir="rtl" color="#CCCCCC">نوع آهنگ :</font>
         </td>
	    </tr>
       </table>
	  </td>
	 </tr>
	 <tr>
	  <td align="center" colspan="2"><input type="submit" name="search" value="جستجو" /></td>
	 </tr>
	</table>
    </form>
   </td>
  </tr>
 </table>
</body>
</html>
