<?php session_start(); ?>

<script language="javascript">
 alert("<?php echo $_SESSION['user']?> خداحافظ");
</script>
		
<?php
$_SESSION['user']=" ";
unset($_SESSION['user']);

?>
<script language="javascript">
 window.location="../index.php";
</script>