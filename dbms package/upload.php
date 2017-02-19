<!DOCTYPE HTML>
<html>
<head>
<title>PhotoArtWork</title>
</head>
<body>
<form enctype="multipart/form-data" name="Form1" method="POST" action="do.php">
<input type="hidden" name="MAX_FILE_SIZE" value="223232" />            
<input type="text" name="name">
First Name: 
Select your profile picture:
<input type="file" name="image" size="50">
<p>
<input type="submit" name="submit" value="Upload File"></p>
</form>
<?
if(isset($_POST['submit'])) 
{
$name = $_POST["name"];
$img1_name = $_FILES['image']['name'];
}
$connection=mysqli_connect('localhost','root','','photo') or die ("ERROR: Cannot Connect");
$sql = "INSERT INTO photo (name,image) VALUES ('$name' , '$img1_name')";
mysqli_query($connection, $sql) or die ("ERROR: in insert query");
$result= mysqli_query($connection, $sql);
mysqli_close($connection);
?>

</body>
</html>
