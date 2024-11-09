<?php session_start(); ?>
<?php 
$user=$_POST['user'];
$pass=$_POST['password'];

$link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
  mysql_select_db("zargar");
  
$query2="SELECT * FROM `modir`";
$result2=mysql_query("$query2");
$row2=mysql_fetch_array($result2);

if($row2['user']==$user and $row2['pass']==md5($pass))
{
         $_SESSION['f']=1;
		$_SESSION['user']="مدیر";?>
				
		<script language="javascript">
	    alert("<?php echo $_SESSION['user']?> سلام خوش آمدی");
		window.location="modir/manager.php";
		</script>
		
<?php }else{?>
<script language="javascript">
alert("نام کاربری یا رمز ورود اشتباه است");
		window.location="../index.php?page_name=login";
		</script>

<?php  }?>

