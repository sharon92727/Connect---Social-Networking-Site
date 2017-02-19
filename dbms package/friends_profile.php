<?php
session_start();
$frnd=$_GET['id2'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Connect</title>
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
<li><a href="images.php">photos</a></li>
          <li>
          <ul>
<li><a href="send_message.php">send message</a></li>
              <li><a href="scrapbook.php">view scrapbook</a></li>
</ul><a href="#">scrapbook</a></li>
          <li class="selected">
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
<a href='temp1.php?frnd=$frnd'>Add as Friend</a>
<table width="717" align="left" >
</table>
</td>
</tr>
<!--class="new1" align="left"-->
<tr>
<td>

<h1>
<?php
	$connection=mysql_connect("localhost","root","") or die(mysql_error());
	$db=mysql_select_db("test",$connection);
	//$sess=$_SESSION['id'];
	$sql=mysql_query("select * from con_info where lno=$frnd");
	$row=mysql_fetch_array($sql);
	echo "<p>EMAIL :";
	echo $row[1]."</p>";
	echo "<p>PHONE NUMBER :";
	echo $row[2]."</p>";
	echo "<p>ADDRESS :";
	echo $row[3]."</p>";
	echo "<p>CITY :";
	echo $row[4]."</p>";
	echo "<p>WEBSITE :";
	echo $row[6]."</p>";
?>
</h1>
  </p>
  <p>&nbsp; </p>
</center>
</td>
</tr>
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->



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
	
	mysql_connect("localhost","root","");
	mysql_select_db("test");
	$id=$_SESSION['id'];
$getpic=mysql_query("SELECT profile_pic FROM po_info where `lno`='$frnd'");
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
