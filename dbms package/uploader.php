<?php
session_start();
if($_SESSION['logged']==0)
{
	header("Location: /index.php");
	exit;
}

$connection = @mysql_connect("localhost", "root", "") or die(mysql_error());
$target_path = "";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
{
    //echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    //" has been uploaded";
	
	include("connect.php");
	$no=$_SESSION['id'];
	$db_name="test";
	$table_name="photos";
	$dbphoto="photo";

echo "add";
	mysql_query("insert into photos values(NULL,'".basename( $_FILES['uploadedfile']['name'])."','17-jan-10','abc')");
	
//	$sql1="insert into photos values(NULL,'".basename( $_FILES['uploadedfile']['name'])."','17-jan-10','abc')";
//	$result = @mysql_query($sql1,$connection) or die(mysql_error());
echo"added";
	
/*	$sql=("select * from photos where `$dbphoto`='".basename( $_FILES['uploadedfile']['name'])."' ");
		$result = @mysql_query($sql,$connection) or die(mysql_error());
		echo "pk";

	$row = mysql_fetch_array($result);
	echo "hi";
    $potonum=$row['p_no'];*/
	//mysql_query("insert into user_photo values('$no',NULL)");
	
		$sql1="insert into `test`.`user_photo` values ('$no',NULL)";
		
	$result = @mysql_query($sql1,$connection) or die(mysql_error());
	echo "yes?";
	
	if($sql1)
	{
	echo "Inserted";
	header("Location: images.php");
	}
}
else
{
    echo "There was an error uploading the file, please try again!";
}

?>