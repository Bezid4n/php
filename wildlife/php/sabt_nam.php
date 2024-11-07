<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script language="javascript" type="text/javascript">
function check_form()
{
	if(document.getElementById('name_karbari').value=="")
	{
		alert("نام کاربری را وارد کنید");
		document.getElementById('name_karbari').focus();
		return false;
	}

	if(document.getElementById('pass').value=="")
	{
		alert("رمز عبور را وارد کنید");
		document.getElementById('pass').focus();
		return false;
	}
	if(document.getElementById('rpass').value=="")
	{
		alert("تکرار رمز را وارد کنید");
		document.getElementById('rpass').focus();
		return false;
	}
	
	if(document.getElementById('rpass').value!=document.getElementById('pass').value)
	{
		alert("رمز ورود با تکرار همخوانی ندارد! دوباره سعی کنید");
		document.getElementById('rpass').select();
		return false;
	}
return true;
}
</script>
<body>
 </script>
 <form action="php/save_sabt_nam.php" method="post" onSubmit="javascript:return check_form();">
 <table border="0" width="100%" cellspacing="0" cellpadding="0" bgcolor="#666666">
  <tr>
   <td valign="top">
     <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tr>
       <td bgcolor="#FF6600" colspan="2" align="right">
        <font size="5" face="Courier New, Courier, monospace"><b>ثبت نام</b></font>
       </td>
      </tr>
	  <tr>
	   <td align="right" width="100%" bgcolor="#009966" colspan="2">
		<b style="font-family:"B Nazanin"">مشخصات فردی</b>	   </td>
	  </tr>
	  <tr>
	   <td width="80%" align="right" dir="rtl"><input name="name" type="text" />	       </td>
	   <td width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">نام :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right" dir="rtl"><input name="family" type="text" />	   </td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">نام خانوادگی :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right" >
		 <font face="Tahoma" size="2" color="#CCCCCC" dir="rtl">
		  <input type="radio" name="sex" value="1"/>مرد</font>
		 <font face="Tahoma" size="2" color="#CCCCCC" dir="rtl">
		  <input type="radio" name="sex" value="0" />زن</font>	   </td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">جنسیت :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right">
		 <select name="year">
		   <option>1360</option>
		   <option>1361</option>
		   <option>1362</option>
		   <option>1363</option>
		   <option>1364</option>
		   <option>1365</option>
		   <option>1366</option>
		   <option>1367</option>
		   <option>1368</option>
		   <option>1369</option>
		   <option>1370</option>
		 </select>
		 <select name="moth">
		   <option>1</option>
		   <option>2</option>
		   <option>3</option>
		   <option>4</option>
		   <option>5</option>
		   <option>6</option>
		   <option>7</option>
		   <option>8</option>
		   <option>9</option>
		   <option>10</option>
		   <option>11</option>
		   <option>12</option>
		 </select>
		 <select name="day">
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           <option>6</option>
           <option>7</option>
           <option>8</option>
           <option>9</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           <option>13</option>
           <option>14</option>
           <option>15</option>
           <option>16</option>
           <option>17</option>
           <option>18</option>
           <option>19</option>
           <option>20</option>
           <option>21</option>
           <option>22</option>
           <option>23</option>
           <option>24</option>
           <option>25</option>
           <option>26</option>
           <option>27</option>
           <option>28</option>
           <option>29</option>
           <option>30</option>
           <option>31</option>
                  </select></td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">تاریخ تولد :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right" dir="rtl">
	    <input name="pic" type="file" dir="ltr"/>	
	   </td>
	   <td width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">عکس :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right">
	    <input type="text" name="email" size="30"/>	
	   </td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">پست الکترونیکی :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right">
	    <textarea name="address" cols="50%" rows="3%" dir="rtl" lang="fa"></textarea></td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">آدرس :</font></td>
	  </tr>
	 </table>
    </td>
   </tr>
   <tr>
    <td>
	 <table border="0" cellspacing="0"  width="100%">
	  <tr>
	   <td align="right" width="100%" bgcolor="#009966" colspan="2">
		<b style="font-family:"B Nazanin"">مشخصات کاربری</b>
	   </td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right">
	   <input name="name_karbari" type="text" /></td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">نام کاربری :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right"><input name="pass" type="password"/>       </td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">رمز ورود :</font></td>
	  </tr>
	  <tr>
	   <td  width="80%" align="right"><input name="rpass"type="password"/>       </td>
	   <td  width="20%" align="right" dir="rtl">
	    <font face="Tahoma" size="2" color="#CCCCCC">تکرار رمز ورود :</font></td>
	  </tr>
	 </table>
	</td>
   </tr>
   <tr>
    <td align="center">
	 <input type="submit" value="ارسال" />
	</td>
   </tr>
</table>
</form>
</body>
</html>