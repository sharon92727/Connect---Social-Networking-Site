<?php
	session_start();
	$db_name="test";
	$table_name="login";
	$dbid="eid";
	$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	$id=$_POST['ename'];
	$sql="SELECT * FROM $table_name WHERE `$dbid`='$id'";
	$result = @mysql_query($sql,$connection) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$name=$row['eid'];
	$no=$row['lno'];
	$password=$row['password'];
	if(!($id || $_POST['pwd']))
	{
		header("location:http://localhost/index_error.php");
	}
	
	if($password!=$_POST['pwd'])
	{
		header("Location: http://localhost/index_error.php");
	                exit;
	}	
	//else
if($id==$name&&$password==$_POST['pwd'])
	{
		$_SESSION['logged'] = 1;
		$_SESSION['id']=$no;
		$_SESSION['name']=$name;
		$_SESSION['pwd']=$_POST['pwd'];
		header('Location: http://localhost/index.html');
		
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