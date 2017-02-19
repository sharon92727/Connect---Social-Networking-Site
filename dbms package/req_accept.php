<?php 
		session_start();
		$connection=mysql_connect("localhost","root","") or die(mysql_error());
		$db=mysql_select_db("test",$connection);
		$frnd=$_SESSION['newfriendno'];
		$user=$_SESSION['id'];
		$sql1="insert into `friends` values('$user','$frnd')";
		$sql2="insert into `friends` values('$frnd','$user')";
		$sql="delete from `requests` where `to`='$_SESSION[id]' and `from`='$_SESSION[newfriendno]'";
		$res=mysql_query($sql1,$connection) or die(mysql_error());
		$res1=mysql_query($sql2,$connection);
		if($res1 && $res)
		$res3=@mysql_query($sql,$connection);
		header("Location:viewfriendsprofile.php?id2=$frnd");
?>
