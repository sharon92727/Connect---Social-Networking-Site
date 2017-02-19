<html>
<body>

<?php $fname = $_POST['fname'];?>
<?php $lname = $_POST['lname']; ?>
<?php $sex = $_POST['sex']; ?>
<?php $login = $_POST['login']; ?>
<?php $password1 = $_POST['password1'];?>
<?php $password2 = $_POST['password2']; ?>
<?php $mail = $_POST['mail']; ?>
<?php $date = $_POST['date']; ?>
<?php $month = $_POST['month'];?>
<?php $year = $_POST['year']; ?>
<?php $phone = $_POST['phone']; ?>
<?php $city = $_POST['city']; ?>
<?php $state = $_POST['state'];?>
<?php 
require_once('appvars.php');
$image = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];
    
$image_size = $_FILES['image']['size']; 

    
      
if ((($image_type == 'image/gif') || ($image_type == 'image/jpeg') || ($image_type == 'image/pjpeg') || ($image_type == 'image/png'))&&($image_size>0)&&($image_size <= GW_MAXFILESIZE)) 
{
        
if ($_FILES['image']['error'] == 0) 
{          
$tarPOST = GW_UPLOADPATH . $image;
     // Move the file to the tarPOST upload folder     
if (move_uploaded_file($_FILES['image']['tmp_name'], $tarPOST)) 
{
            
$connection=mysqli_connect('localhost','root','','sn') or die ("ERROR: Cannot Connect");
$sql = "INSERT INTO user(fname,lname,sex,userid,password,email,phone,city,state,image) VALUES ('$fname' , '$lname','$sex','$login','$password1','$mail','$phone','$city','$state','$image')";
mysqli_query($connection, $sql) or die ("ERROR: in insert query");
echo '<p><img src=" ' . GW_UPLOADPATH . $image . ' " /></p>';
 
mysqli_close($connection);
}}}
?>
</body>
</html>