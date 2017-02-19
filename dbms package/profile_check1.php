<?php
session_start();
?>
<?php
	$db_name="test";
	$table_name="registration1";
	$dblname="eid";
//	echo "hiii";
	$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
	$db = @mysql_select_db($db_name, $connection) or die(mysql_error());
	$email=$_POST['email'];
	$phoneno=$_POST['ph_no'];
	//$address=$_POST['address'];
	$city=$_POST['city'];
	//$zipcode=$_POST['zipcode'];
	//$website=$_POST['website'];
	$working=$_POST['working'];
	$college=$_POST['college'];
	$school=$_POST['school'];
	//$activities=$_POST['activities'];
	//$sports=$_POST['sports'];
	$interests=$_POST['interests'];
	
	$user=$_SESSION['id'];
	$target_path = "";

    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
    move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
    

	$sql1="update po_info set profile_pic='".basename($_FILES['uploadedfile']['name'])."',
	 interests='$interests' where lno='$user'";
	
	   //('$user','".basename( $_FILES['uploadedfile']['name'])."','$activities','$interests','$sports')");
	//$sql1=("insert into po_info values ('$user','".basename( $_FILES['uploadedfile']['name'])."','$activities','$interests','$sports')");

   //  $val=$table_name.lno;
   
   $sql2="update con_info set email='$email',ph_no='$phoneno',city='$city' where lno='$user'"; 
   
   	//$sql2="insert into `test`.`con_info`
	 //           values ('$user','$email','$phoneno','$address','$city','$zipcode','$website')";
		
	$sql3="update edu_info set working='$working',college='$college',school='$school' where lno='$user'";	
				
	//$sql3="insert into `test`.`edu_info`
	 //           values ('$user','$working','$college','$school')";
				
	//$result1 = @mysql_query($sql1,$connection) or die(mysql_error());
	$Result1=@mysql_query($sql1,$connection) or die(mysql_error());
	$result2 = @mysql_query($sql2,$connection) or die(mysql_error());
	$result3 = @mysql_query($sql3,$connection) or die(mysql_error());
	
	header('location: http://localhost/view_contact_info.php');
	

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
	  
	  header('location: http://localhost/new/registration_success.php');
	}
	
	else
	{
		header("Location: http://localhost/new/registration_error.php");
	    exit;
	}	

*/		
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