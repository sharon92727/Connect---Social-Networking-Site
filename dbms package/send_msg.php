<?php
	session_start();
	$db_name="test";
	$table_name="login";
	$dbid="eid";
	$dbno="lno";
                $user=$_SESSION['id'];
	$r_name=$_POST['receiver'];
	$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
	echo "wat???";
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	
	$sql="SELECT * FROM $table_name WHERE `$dbid`='$r_name'";
	$result = @mysql_query($sql,$connection) or die(mysql_error());
	echo "here";
	$row = mysql_fetch_array($result);
	$no=$row['eid'];
	$lno=$row['lno'];
	$msg=$_POST['msg'];
	if($r_name!=$no)
	{
		header("Location: http://localhost/msg_error.php");   // user doent exist
	    exit;
	}	
	
	$sql1="insert into `test`.`messages` values (NULL,'$msg')";
	$result = @mysql_query($sql1,$connection) or die(mysql_error());
	
	$sql2="insert into `test`.`user_msg` values ('$lno',NULL,'$user')";
	$result = @mysql_query($sql2,$connection) or die(mysql_error());


	if($sql1 && $sql2)
	{
		header("location: http://localhost/msg_sent.php");
	}
	else
	{
		header("location: http://localhost/msg_not_sent.php");
	}
?>

<html>
<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Success</title>
<style type="text/css">
.style1 {
	color: #FFFFFF;
	font-family: "Tiranti Solid LET";
	text-align: center;
	font-size: 40pt;
	text-decoration: underline;
}
.style2 {
	font-size: xx-large;
	font-family: Cambria;
	color: #00FF00;
	text-align: center;
}
</style>
</head>

<body>


</body>

</html>