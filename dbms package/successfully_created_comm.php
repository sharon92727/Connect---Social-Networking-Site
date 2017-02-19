<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> communities </title>
</head>
<style type="text/css">
p
{
background-color:#6C0;
width:80%;
height:60px;
}

a:hover,a:active
{
float:none;
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
	width:50%;
	height:620px;
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

div.three
{
	background-color:#990;
	width:380px;
	height:25px;
	background-color:#960;
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
<tr valign="top">
<td>
<table>
<tr valign="top">
<td>

<a href="create_communities.php">
<div class="three">
    <center><font color="#FFFFFF"> Create Communities </font> </center>
</div>
</a>

<!--center> <strong> COMMUNITIES </strong> </center-->
</td>
<td>
<a href="view_communities.php">
<div class="three">
    <center><font color="#FFFFFF"> View Communities </font> </center>
</div>
</a>
</td>
</tr>
<tr>
</tr>
</table>

<table width="750" align="center">
<tr>
  <td> <center> <a href="view_communities.php"> Go to Community page </a> </center> </td>
</tr>
<tr>
<td width="367">
<font face="Courier New, Courier, monospace"> <center>
  <br /> 
  <p> <br />community created successfully..!! </p> </center> </font>
</td>
</tr>
</table>
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->
</td>
</tr>
</table>
</font>
<!--
<h1><center>  PROFILE  </center></h1> -->
<!--video src="PranavMistry_2009I.avi" width="320" height="240" autoplay>
video
</video-->

</body>
</html>