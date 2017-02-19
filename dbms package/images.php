<?php
session_start();
$username=$_SESSION['name'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Connect</title>
<meta name="description" content="website description">
<meta name="keywords" content="website keywords, website keywords">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- stylesheets --><link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/dark.css" rel="stylesheet" type="text/css">
<!-- modernizr enables HTML5 elements and feature detects --><script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<body>
  <div id="main">

    <!-- begin header -->
    <header><div id="logo">
      <h1>CONNECT</h1></div>
      <nav width="800px"><ul class="sf-menu" id="nav">
<li><a href="index.html">home</a></li>
          
          <li>
          <ul>
<li><a href="edit_profile.php">edit profile</a></li>
              <li><a href="view_contact_info.php">contact info</a></li>
<li><a href="view_educational_info.php">education info</a></li>
              <li><a href="view_other_info.php">other info</a></li>
            </ul>
<a href="#">profile</a>
</li>
<li class="selected"><a href="images.php">photos</a></li>
          <li>
          <ul>
<li><a href="send_message.php">send message</a></li>
              <li><a href="scrapbook.php">view scrapbook</a></li>
</ul><a href="#">scrapbook</a></li>
          <li>
<ul>
              <li><a href="friend_request.php">view requests</a></li>
              <li><a href="view_friends.php">view friends</a></li>
</ul>
<a href="#">friends</a>
</li>
<li>
               <ul>
<li><a href="create_communities.php">create communities</a></li>
              <li><a href="view_communities.php">view communities</a></li>
</ul><a href="#">communities</a></li>
          <li><a href="login.php">log out</a></li>
        </ul></nav></header><!-- end header --><!-- begin content --><div id="site_content">
      <div id="left_content">
        <h1>&nbsp;</h1>
        <table width="461" align="left" class="new1">
  <tr valign="top">
<td>
<table width="717" align="left" >

</table>
</td>
</tr>
<!--class="new1" align="left"-->
<tr>
<td>
<table width="85%">
<form enctype="multipart/form-data" action="uploader.php" method="POST">
<tr align="center" valign="top">
<td width="86%" height="27">
<!--input type="image" value="upload" />
<center> <strong> IMAGES </strong> :) </center-->
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<font face="Comic Sans MS, cursive" size="+1">
Choose a file to upload&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </font> <input name="uploadedfile" type="file" />
</td>

<td width="14%">
<input align="right" hspace="100px"type="submit" value="Upload File" />
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
	$sql=mysql_query("select p_no from user_photo where `lno`='$id'");
		
	$temp=0;
	//echo"<table align=\"right\">";
	echo"<table><tr>";
	while($row=mysql_fetch_array($sql))
	{
		$picno=$row[0];
		$getpic=mysql_query("select photo from photos where `p_no`='$picno'");
		$row1=mysql_fetch_array($getpic);
		if($temp%4!=0)
		{
		echo "<td><img src='$row1[0]' width=\"150\" height=\"150\"/></td>";
		$temp=$temp+1;
		
		}
		else
		{
			//echo"<br>";
			echo"</tr><tr>";
	    echo "<td><img src='$row1[0]' width=\"150\" height=\"150\"/></td>";
		$temp=1;            
		
		}	
	}
	echo "</table>";
?>

</table>

</td>
</tr>
</table>

</font>
<!--
<h1><center>  PROFILE  </center></h1> -->
<!--video src="PranavMistry_2009I.avi" width="320" height="240" autoplay>
video
</video-->
</table>
      </div>
      <div id="right_content">
        <?php

mysql_connect('localhost','root','');
mysql_select_db("test");
$id=$_SESSION['id'];
$getpic=mysql_query("SELECT profile_pic FROM po_info where `lno`='$id'");
$row1=mysql_fetch_array($getpic);

echo"<image src='$row1[0]' width=\"200\" height=\"200\">";
?>
<!--img style="float: left;" src="images/about.jpg" title="about me" alt="about me"-->
</div>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p><img src="images/twitter.png" alt="twitter">&nbsp;<img src="images/facebook.png" alt="facebook">&nbsp;<img src="images/rss.png" alt="rss"></p>
    </footer><!-- end footer -->
</div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script><script type="text/javascript" src="js/jquery.easing-sooper.js"></script><script type="text/javascript" src="js/jquery.sooperfish.js"></script><!-- initialise sooperfish menu --><script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
