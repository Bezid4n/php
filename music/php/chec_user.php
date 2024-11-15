<?php session_start(); ?>
<?php 
$user=$_POST['user'];
$pass=$_POST['password'];

$link=mysql_connect("localhost","root","");
  
  if(!$link)
  die("اشکال در ارتباط با پایگاه داده!");
  
$query="SELECT * FROM `sabt_nam`";
$result=mysql_db_query("music",$query,$link);
while($row=mysql_fetch_array($result)) {

$query2="SELECT * FROM `modir`";
$result2=mysql_db_query("music",$query2,$link);
$row2=mysql_fetch_array($result2);

if($row2['user_name']==$user and $row2['pass']==md5($pass))
{
         
		$_SESSION['user']="مدیر";?>
				
		<script language="javascript">
	    alert("<?php echo $_SESSION['user']?> سلام خوش آمدی");
		window.location="modir/manager.php";
		</script>
		
<?php } elseif($row['name_karbari']==$user and $row['pass']==md5($pass)) {
		$_SESSION['user']=$row['name_karbari'];?>
		
		<script language="javascript">
	    alert("<?php echo $_SESSION['user']?> سلام خوش آمدی");
		window.location="../index.php";
		</script>
		
<?php }else{?>
<script language="javascript">
alert("نام کاربری یا رمز ورود اشتباه است");
		window.location="../index.php";
		</script>

<?php } }?>

