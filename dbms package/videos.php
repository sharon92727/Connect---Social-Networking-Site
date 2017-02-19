<?php
session_start();
if($_SESSION['logged']==0)
{
	header("Location: /index.php");
	exit;
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Videos </title>
</head>
<style type="text/css">
p
{
background-color:#6C0;
}

a:hover,a:active
{
float:left;
background-color:#C93;

}

a:link,a:visited
{
display:block;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}



h1{text-shadow:5px 5px 5px #903;}
table.new1
{
	width:60%;
	height:520px;
	border:3px solid #F90;
	background-color:#FFF;
	
}

div
{
	font-family:"Comic Sans MS", cursive;
	font-size:17px;
	float:left;
}

div.one
{
	width:200px;
	height:25px;
}

div.two
{
	width:220px;
	height:25px;
}
	
</style>
<body background="pics/b.jpg">
<center>
<tr>
	<img src="pics/one.jpg" width="100%" height="94"/>
</tr>
</center>
<!--font style="font-family:'Comic Sans MS', cursive" style="font-size:45px"-->

<!--table align="left">
<tr>
<td>
<image src="poo.jpg" width="200" height="200">
</image>
</td>
</tr>
</table-->
<table>
<table align="right">
<tr>

<td>
<a href="friends.php">
<div class="two">
     <center><font color="#FFFFFF"> Friends </font></center>
</div>
</a>
</td>

<td>
<a href="communities.php">
<div class="two">
     <center><font color="#FFFFFF"> Communities </font></center>
</div>
</a>
</td>


<td>
<a href="home.php">
<div class="two">
     <center><font color="#FFFFFF"> Home </font></center>
</div>
</a>
</td>

<td>
<a href="change_pass.php">
<div class="two">
     <center><font color="#FFFFFF"> Change password </font></center>
</div>
</a>
</td>

<td>
<a href="index.php">
<div class="two">
     <center><font color="#FFFFFF"> Log Off </font></center>
</div>
</a>
</td>

</tr>
</table>

<table>
<table align="left">
<tr>
<td>
<?php
	
	mysql_connect("localhost","root","");
	mysql_select_db("test");
	$id=$_SESSION['id'];
$getpic=mysql_query("SELECT profile_pic FROM po_info where `lno`='$id'");
$row1=mysql_fetch_array($getpic);

echo"<image src='$row1[0]' width=\"200\" height=\"200\">";
?>

</td>
</tr>

<tr>
<td>
<a href="profile.php">
<div class="one">
     <center><font color="#FFFFFF"> Profile </font> </center>
</div>
</a>
</td>
</tr>
<tr>
<td>
<a href="scrapbook.php">
<div class="one">
    <center><font color="#FFFFFF"> Scrap Book </font> </center>
</div>
</a>
</td>
</tr>

<tr>

<td>
<a href="images.php">
<div class="one">
    <center><font color="#FFFFFF"> Images </font> </center>
</div>
</a>
</td>
</tr>

<td>
<a href="videos.php">
<div class="one">
    <center><font color="#FFFFFF"> Videos </font> </center>
</div>
</a>
</td>
</table>

<table align="right">
<tr>
<td align="right" valign="top">
<!--video src="video.avi" width="310" height="240" autoplay>
video
</video-->
</td>
</tr>
<tr>
<td align="right" valign="top">
<image src="adv.jpg" width="310" height="200"> </image>
</td>
</tr>
</table>

<table class="new1" align="left">
<tr>
<td valign="top">

<!--center> <strong> VIDEOS :) </strong> </center-->
<table>
<form enctype="multipart/form-data" action="uploader1.php" method="POST">
<tr align="center" valign="top">
<td width="86%" height="27">
<!--input type="image" value="upload" />
<center> <strong> IMAGES </strong> :) </center-->
<input type="hidden" name="MAX_FILE_SIZE" value="10000000000000000" />
<font face="Comic Sans MS, cursive" size="+1">
Choose a file to upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </font> <input name="uploadedfile" type="file" />
</td>

<td width="14%">
<input align="middle" hspace="100px"type="submit" value="Upload File" />
</td>
</tr>
<tr align="center" valign="top">
  <td colspan="2"><hr /></td>
  </tr>
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->

<!-- displaying the pictures..-->
</form>
</table>

<!--table>
<tr align="left">
<!--table align="center"-->

<?php
	include("connect.php");
	$id=$_SESSION['id'];
	$sql=mysql_query("select v_no from user_video where `lno`='$id'");
		
	$temp=0;
	//echo"<table align=\"right\">";
	echo"<table><tr>";
	while($row=mysql_fetch_array($sql))
	{
		$picno=$row[0];
		$getpic=mysql_query("select video from videos where `p_no`='$picno'");
		$row1=mysql_fetch_array($getpic);
		if($temp%4!=0)
		{
		echo "<td><video src='$row1[0]' width=\"150\" height=\"150\"/></td>";
		$temp=$temp+1;
		
		}
		else
		{
			//echo"<br>";
			echo"</tr><tr>";
	    echo "<td><video src='$row1[0]' width=\"150\" height=\"150\"/></td>";
		$temp=1;            
		
		}	
	}
	echo "</table>";
?>


</td>
</tr>
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->



</table>
</table>

</font>
<!--
<h1><center>  PROFILE  </center></h1> -->
<!--video src="PranavMistry_2009I.avi" width="320" height="240" autoplay>
video
</video-->

</body>
</html>