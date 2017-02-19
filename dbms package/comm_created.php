<?php
session_start();
if($_SESSION['logged']==0)
{
	header("Location: /index.php");
	exit;
}
?>

<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("test",$con);

$owner=$_SESSION['id'];    
$name=$_POST['comm_name'];
$descrp=$_POST['desc'];
$target_path = "";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
mysql_query("insert into comm_det values(NULL,'$name','$owner','$descrp','".basename( $_FILES['uploadedfile']['name'])."')");
$table_name="comm_det";
$dbname="name";
echo "here1";
$sql="select * from comm_det where `$dbname`='$name'";
echo "hereee";

$result = @mysql_query($sql,$con) or die(mysql_error());
//echo "ll";
	$row = mysql_fetch_array($result);
	$name=$row['comm_no']; 
	//echo "here";
$sql1="CALL join_comm($owner,$name)";
          

		//echo "is it?";
	$result = @mysql_query($sql1,$con) or header("location:already_member.php");
    
	 header("location:view_communities.php");  
  
?>
