<?php
session_start(); 
$user=$_POST['user'];
$pass=$_POST['password'];

	include("db.php");	
  
$query="SELECT * FROM `sabt_nam`";
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);

$query2="SELECT * FROM `modir`";
$result2=mysqli_query($link,$query2);
$row2=mysqli_fetch_array($result2);

if($row2['user_name']==$user and $row2['pass']==md5($pass))
{
         
		$_SESSION['user']="مدیر";?>
				
		<script language="javascript">
	    alert("<?php echo $_SESSION['user']?> سلام خوش آمدی");
		window.location="modir/manager.php?page_name=desctop";
		</script>
		
<?php } elseif($row['name_karbari']==$user and $row['pass']==md5($pass)) {
		$_SESSION['user']=$row['name_karbari'];?>
		
		<script language="javascript">
	    alert("<?php echo $_SESSION['user']?> سلام خوش آمدی");
		window.location="#.php";
		</script>
		
<?php }else{?>
<script language="javascript">
alert("نام کاربری یا رمز ورود اشتباه است");
		window.location="../home.php?page_name=home";
		</script>

<?php }?>

