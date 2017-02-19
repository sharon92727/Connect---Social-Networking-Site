<?php
session_start();
	$db_name="test";
	$table_name="registration1";
	$dblname="eid";
	$connection = @mysql_connect('localhost','root','') or die(mysql_error());
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	$target_path = "";

    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
    move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
  
	$name=$_POST['username'];
        //$country=$_POST['country'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	$eid=$_POST['eid'];
	$pwd=$_POST['password'];
	$day=$_POST['day'];
    $month=$_POST['month'];
$year=$_POST['year'];
$dob=$year.'-'.$month.'-'.$day;

	$phoneno=$_POST['ph_no'];
	//$address=$_POST['address'];
	//$zipcode=$_POST['zipcode'];
	//$website=$_POST['website'];
	$working=$_POST['working'];
	$college=$_POST['college'];
	$school=$_POST['school'];
	//$activities=$_POST['activities'];
	//$sports=$_POST['sports'];
	$interests=$_POST['interests'];

	  

	$sql="select * from `test`.`login` where `$dblname`='$name' ";
	$result=mysql_query($sql);
	$n=mysql_fetch_row($result);

	if($n>0)
	{
	header("location: http://localhost/regis_user_exists1.php");
	exit;
	}
	$sql1="insert into `test`.`registration1`
	            values (NULL,'$city','$gender','$dob','$eid')"; 
				
				

   	$sql2="insert into `test`.`login' values (NULL,'$name','$pwd')";
	$result1 = @mysql_query($sql1,$connection) or die(mysql_error());
	$result2 = @mysql_query($sql2,$connection) or die(mysql_error());
	
	$sqll="SELECT * FROM login WHERE eid='$name'";
	$result = @mysql_query($sqll,$connection) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$user=$row['lno'];
	
	$sql1=("insert into po_info values ('$user','".basename( $_FILES['uploadedfile']['name'])."','$interests')");   //  $val=$table_name.lno;
   	$sql2="insert into `test`.`con_info' values ('$user','$eid','$phoneno','$city')";			
	$sql3="insert into `test`.`edu_info' values ('$user','$working','$college','$school')";
	$Res1=@mysql_query($sql1,$connection) or die(mysql_error());
	$res2 = @mysql_query($sql2,$connection) or die(mysql_error());
	$res3 = @mysql_query($sql3,$connection) or die(mysql_error());
	
	if($result1 && $result2)
	{
	  $_SESSION['logged'] = 1;
	  $_SESSION['name'] = $name;
	  $_SESSION['pwd']=$pwd;;
	   header('location: http://localhost/index.html');
	}
	
	else
	{
		header("Location: http://localhost/registration_error.php");
	    exit;
	}	

/*	
	if($Res1 && $res2 && $res3)
	{
	  header('location: http://localhost/index.html');
	}
	
	else
	{
		header("Location: http://localhost/registration_error.php");
	    exit;
	}	
		
?>
<?php
	$phoneno=$_POST['ph_no'];
	//$address=$_POST['address'];
	$city=$_POST['city'];
	//$zipcode=$_POST['zipcode'];
	//$website=$_POST['website'];
	$working=$_POST['working'];
	$college=$_POST['college'];
	$school=$_POST['school'];
	$activities=$_POST['activities'];
	$sports=$_POST['sports'];
	$interests=$_POST['interests'];
	
	$table_name="login";
	$dbid="eid";
	$temp=$_POST['name'];
	$sqll="SELECT * FROM $table_name WHERE eid='$_temp'";
	$result = @mysql_query($sqll,$connection) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$user=$row['lno'];
	$target_path = "";

    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
    move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
    
$sql1=("insert into po_info values ('$user','".basename( $_FILES['uploadedfile']['name'])."','$activities','$interests','$sports')"); //  $val=$table_name.lno;
$sql2="insert into `test`.`con_info` values ('$user','$email','$phoneno','$address','$city','$zipcode','$website')";
$sql3="insert into `test`.`edu_info` values ('$user','$working','$college','$school')";
	$Res1=@mysql_query($sql1,$connection) or die(mysql_error());
	$res2 = @mysql_query($sql2,$connection) or die(mysql_error());
	$res3 = @mysql_query($sql3,$connection) or die(mysql_error());
	
	if($Res1 && $res2 && $res3)
	{
	  header('location: http://localhost/index.html');
	}
	
	else
	{
		header("Location: http://localhost/registration_error.php");
	    exit;
	}		

/*
    $sql="create trigger regis_ins_login after insert `test`.`registration` 
	        referencing new as newrow
			begin
			insert into `test`.`login` values(:newrow.lno,:newrow.name,:newrow.password);
			end regis_ins_login;"
            					
	
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

*/		
?>

<html>
<head>
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