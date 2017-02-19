<?php
	session_start();
	$con=mysql_connect("localhost","root","");
	mysql_select_db("test",$con);
	$ss=$_SESSION['id'];
	$s1=$_GET['frnd'];	
                $sql="insert into 'test'.'requests' values('$ss','$s1')";
	$add=mysql_query($sql);
	header("Location: request_sent.php");
?>


	