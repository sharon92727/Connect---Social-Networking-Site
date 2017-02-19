<?php
 	session_start();
	$db_name='test';
	$table_name="login";
	$dblno="lno";
	$user=$_SESSION[id];
	
	$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	
	$cur=$_POST['cur_pwd'];
	$new=$_POST['new_pwd'];
	$chk=$_POST['chk_new_pwd'];
	
	$sql="select * from `test`.`login` where `$dblno`='$_SESSION[id]' ";
	$result = @mysql_query($sql,$connection) or die(mysql_error());
	$row = mysql_fetch_array($result);
	if($cur==$row['password'])
	{
	
	if($new==$chk)
	{
		$sql1="update login set password='$new' where lno='$_SESSION[id]'";
		$result = @mysql_query($sql1,$connection) or die(mysql_error());
		header("location:success_change_pwd.php");
	}
	
	else
	{
		header("location:error_pwd_check.php");
	}
	}
	else
	{
		header("location:password_wrong.php");
	}
	
	?>