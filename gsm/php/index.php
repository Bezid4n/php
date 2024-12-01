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


$query="SELECT * FROM `news` ORDER BY `code` DESC LIMIT 0 , 5";
$result=mysql_db_query("gsm",$query,$link);

$query2="SELECT * FROM `barasi` ORDER BY `code` DESC LIMIT 0 , 5";
$result2=mysql_db_query("gsm",$query2,$link);

$query3="SELECT * FROM `download` ORDER BY `code` DESC LIMIT 0 , 5";
$result3=mysql_db_query("gsm",$query3,$link);
?>
<body>
 <table border="0" cellspacing="0" cellpadding="1" width="100%">
  <tr>
   <td width="500" valign="top">
     <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
       <td align="center">
     	<img src="pic/tbl/news.jpg" width="100%" height="50">
       </td>
      </tr>
      <?php while($row=mysql_fetch_array($result)) {?>
      <tr>
       <td>
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
	      <td align="right" colspan="3" width="75">
           <img src="<?php echo $row['pic']?>" width="70" height="100"/>
          </td>
	     </tr>
	     <tr><td><br /></td></tr>
	    </table>	
       </td>
      </tr>
      <?php } ?>
     </table>
    </td>
    <td width="500" valign="top">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
       <tr>
        <td align="center" colspan="2">
	     <img src="pic/tbl/barasi.jpg" width="100%" height="50">
        </td>
       </tr>
       <?php while($row2=mysql_fetch_array($result2)) {?>
      <tr>
       <td>
        <table border="0" cellpadding="0" width="100%" cellspacing="0">
         <tr>
          <td align="center" >
           <img src="<?php echo $row2['pic']?>" width="100" height="70"/>
          </td>
         </tr>
         <tr>
	      <td align="center"  dir="rtl">
	       <a href="index.php?page_name=show_barasi&id_news=<?php echo $row2['code'] ?>"><?php echo $row2['title']?></a>
          </td>
	     </tr>
         <tr>
	      <td align="center" dir="rtl" valign="top" >
	       <font color="#999999" dir="rtl"><?php echo $row2['hulf_text']?> ...</font>
          </td>
         </tr>
	     <tr>
	      <td align="center"  dir="rtl">
	        <font color="#666666" size="1"><?php echo $row2['date']?></font>
          </td>    
	     </tr>
	     <tr><td><br /></td></tr>
	    </table>	
       </td>
      </tr>
      <?php } ?>
      </table>
    </td>
   </tr>
   <tr>
    <td width="100" valign="top" colspan="2" align="center">
      <table border="0" cellspacing="0" cellpadding="0" width="400">
       <tr>
        <td align="center" colspan="2">
	     <img src="pic/tbl/game.jpg" width="100%" height="50">
        </td>
       </tr>
       <?php $i=1;
	while($row3=mysql_fetch_array($result3))
	 {?>
  <tr <?php if($i%2==0) echo 'bgcolor="#FF8888"';?>>
   <td width="100%">
    <font face="Tahoma, Arial" size="2">
    <table border="0" cellspacing="0" width="100%">
	 <tr>
	  <td align="left" valign="middle">
	   <img src="<?php echo $row3['pic']?>" width="85" height="85"/></td>
	  <td align="right" width="70%" dir="rtl" valign="top">
	   <font color="#999999"><b><?php echo $row3['title']?></b></font><br/><br/>
	   <a href="index.php?page_name=download&id=<?php echo $row3['code']?>">
	    <img src="pic/d1.png" width="15" height="15" border="0"/></a>
	    <a href="index.php?page_name=download&id=<?php echo $row3['code']?>">دانلود و توضیحات بیشتر</a><br />
	   <font face="Tahoma, Arial" size="2">ماژول : 
	   <?php $majol=$row3['cod_majol'];
	         $query4="SELECT * FROM majol WHERE code = $majol";
			 $result4=mysql_db_query("gsm",$query4,$link);
			 $row4=mysql_fetch_array($result4);
	    echo $row4['name']?></font><br />
	   <font face="Tahoma, Arial" size="2">گوشی :
	   <?php $mobile=$row3['cod_mob'];
	         $query5="SELECT * FROM mobile WHERE code = $mobile";
			 $result5=mysql_db_query("gsm",$query5,$link);
			 $row5=mysql_fetch_array($result5);
	    echo $row5['name']?></font>
       </td>
	 </tr>
	</table>
    </font>
   </td>
   <?php $i++ ?>
  </tr>
  <?php } ?>
      </table>
    </td>
   </tr>
 </table>
</body>
</html>
