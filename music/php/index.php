<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
 <table border="0" cellspacing="0" cellpadding="5" width="100%">
  <tr>
   <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF">
    <?php $link=mysql_connect("localhost","root","");
			
			if (!$link)
			die ("اشكال در ارتباط با پایگاه داده!");
			
			$query="SELECT * FROM `modiriat`";
			$result=mysql_db_query("music",$query,$link);
			
			$query1="SELECT * FROM `film` ORDER BY `code` DESC LIMIT 0 , 4";
			$result1=mysql_db_query("music",$query1,$link);
			
			$query2="SELECT * FROM `post` ORDER BY `code` DESC LIMIT 0 , 5";
			$result2=mysql_db_query("music",$query2,$link);
			
			$query3="SELECT * FROM `sabt_music` ORDER BY `code` DESC LIMIT 0 , 7";
			$result3=mysql_db_query("music",$query3,$link);
		   ?>
     <tr>
      <td valign="top">
       <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
         <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
         <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom" align="center"><font size="2">مدیریت</font></td>
         <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
        </tr>
       </table>
      </td>
     </tr>
     <?php while($row=mysql_fetch_array($result)){?>
     <tr dir="rtl" align="center">
      <td>
       <b><?php echo $row['name']?> :</b> <a href="mailto:<?php echo $row['email']?>"><?php echo $row['email']?></a>
      </td>
     </tr>
     <?php }?>
    </table>
   </td>
  </tr>
  <tr>
   <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF">
     <tr>
      <td valign="top" colspan="4">
       <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
         <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
         <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom" align="center"><font size="2">دانلود فیلم و سریال</font></td>
         <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
        </tr>
       </table>
      </td>
     </tr>
     <tr>
      <td align="center" colspan="4"><font size="1" color="#FF0000">
       &there4;دانلود فیلم های ایرانی و خارجی با لینک مستقیم پر سرعت&there4;</font>
      </td>
     </tr>
     <tr dir="rtl" align="center">
      <?php while($row1=mysql_fetch_array($result1)){?>
      <td><a href="index.php?page_name=show_film&id=<?php echo $row1['code']?>">
       <img src="<?php echo $row1['pic']?>" alt="<?php echo $row1['title']?>" width="145" height="175"  border="0"/></a>
      </td>
      <?php }?>
     </tr>
    </table>
   </td>
  </tr>
  <tr>
   <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="#FFFFFF">
     <tr>
      <td valign="top">
       <table width="100%"  border="0" cellpadding="0" cellspacing="0">
        <tr>
         <td width="2%"><img src="pic/tbl/1.jpg" width="18" height="30"></td>
         <td width="96%" background="pic/tbl/3.jpg" dir="rtl" height="30" valign="bottom" align="center"><font size="2">پست ویژه</font></td>
         <td width="2%"><img src="pic/tbl/2.jpg" width="18" height="30"></td>
        </tr>
       </table>
      </td>
     </tr>
      <?php while($row2=mysql_fetch_array($result2)){?>
     <tr dir="rtl" align="center">
      <?php if(!$_SESSION['user']) {?>
      <td><br />
       <img src="<?php echo $row2['pic']?>" alt="برای دانلود باید عضو شوید!" width="500" height="150" border="0"/>
      </td>
      <?php } else {?>
      <td><br /><a href="<?php echo $row2['file']?>">
       <img src="<?php echo $row2['pic']?>" alt="<?php echo $row2['title']?>" width="500" height="150" border="0"/></a>
      </td>
      <?php }?>
     </tr>
     <?php }?>
    </table>
   </td>
  </tr>
  <tr>
   <td>
    <table border="0" cellspacing="6" cellpadding="0" width="100%">
     <?php while($row3=mysql_fetch_array($result3)) { ?>
     <tr>
      <td width="100%">
       <table border="0" cellspacing="0" width="100%" cellpadding="0">
	    <tr>
         <td background="pic/tbl/post-tb.gif" align="left">
          <font face="Tahoma, Geneva, sans-serif" size="2" color="#CCCCCC">
          <?php $mtype=$row3['mtype'];
	        $query4="SELECT * FROM `type_music` where mtype='$mtype'";
            $result4=mysql_db_query("music",$query4,$link);
            $row4=mysql_fetch_array($result4);
			echo $row4['type']?></font>
         </td>
	     <td background="pic/tbl/post-tb.gif" align="right">
          <font face="Tahoma, Geneva, sans-serif" size="2" color="#CCCCCC">
	      <?php echo $row3['title'];?></font>
         </td>
        </tr>
        <tr>
	     <td background="pic/tbl/post_dt.png" align="center" dir="rtl" valign="top" colspan="2" >
	      <font color="#666666" size="1"><?php echo $row3['day']; ?>&nbsp;<?php echo $row3['moth']; ?>&nbsp;<?php echo $row3['year']; ?></font>
         </td>
        </tr>
        <tr>
         <td align="center" dir="rtl" valign="top" colspan="2">
	      <font face="Arial, Helvetica, sans-serif" size="2"><?php echo $row3['desc']?></font>
         </td>
        </tr>
        <tr>
         <td align="center" dir="rtl" valign="top" colspan="2">
	      <img src="<?php echo $row3['pic']?>" width="400" height="500" />
         </td>
        </tr>
        <tr>
	     <td background="pic/tbl/pstbox.png" colspan="2">
          <a href="index.php?page_name=show_music&id=<?php echo $row3['code']?>">
	      <img src="pic/d1.png" width="15" height="15" border="0"/></a>
          <a href="index.php?page_name=show_music&id=<?php echo $row3['code']?>">دانلود و توضیحات بیشتر</a>
         </td>
        </tr>
	   </table>
      </td>
     </tr>
     <?php } ?>
    </table>
   </td>
  </tr>
 </table>
</body>
</html>
