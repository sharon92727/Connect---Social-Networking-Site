<?php
session_start();
	$db_name="test";
	$table_name="registration1";
	$dblname="eid";
//	echo "hiii";
	$connection = @mysql_connect('localhost','root','') or die(mysql_error());
	//echo "wat???";
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	$name=$_POST['name'];
	$curloc=$_POST['curloc'];
	$hometown=$_POST['hometown'];
	$gender=$_POST['gender'];
	$dob=$_POST['dateofbirth'];
	$eid=$_POST['eid'];
	$pwd=$_POST['password'];
	
	$sql="select * from `test`.`login` where `$dblname`='$name' ";
	$result = @mysql_query($sql,$connection) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$namee=$row['eid'];
	
	if($namee==$_POST['name'])
	{
		//header( "Location: http://127.0.0.1/jigsawnet/index_error.php");
		header("Location: http://localhost/new/regis_user_exists.php");
	    exit;
	}	
	
	
	$sql1="insert into `test`.`registration1`
	            values (NULL,'$curloc','$hometown','$gender','$dob','$eid')";

   //  $val=$table_name.lno;
   	$sql2="insert into `test`.`login`
	            values (NULL,'$name','$pwd')";
				
	$result1 = @mysql_query($sql1,$connection) or die(mysql_error());
	$result2 = @mysql_query($sql2,$connection) or die(mysql_error());


	
	if($result1 && $result2)
	{
	  $_SESSION['logged'] = 1;
	  $_SESSION['name'] = $_POST['name'];
	  $_SESSION['pwd']=$_POST['pwd'];
	  
	  header('location: http://localhost/registration_success.php');
	}
	
	else
	{
		header("Location: http://localhost/registration_error.php");
	    exit;
	}	

		
?>

<!--?php
if ((!$_POST['id']) || (!$_POST['pwd']))
{
   //header( "Location: http://127.0.0.1/jigsawnet/index.php");
	header("Location: http://localhost/images.php");
   exit;
}
?-->
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