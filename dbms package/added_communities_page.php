<?php
 session_start();
 $commno=$_GET['id2']; 
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
<li><a href="images.php">photos</a></li>
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

          <li class="selected">
               <ul>
<li><a href="create_communities.php">create communities</a></li>
              <li><a href="view_communities.php">view communities</a></li>
</ul><a href="#">communities</a></li>
          <li><a href="login.php">log out</a></li>
        </ul></nav></header><!-- end header --><!-- begin content --><div id="site_content">
<h1><caption>
Successfully Added..!!</caption></h1>

      <div id="left_content">
        <h1>&nbsp;</h1>
  <table class="new1" align="left">
<tr valign="top">
<td>

<h1>
<form id="form1" name="form1" method="post" action="join_comm.php?id=<?php echo $commno;?>">
<input name="Join" type="submit" id="Join" value="  Join   " />
    </form>
 <form id="form2" name="form2" method="post" action="unjoin_comm.php?id=<?php echo $commno;?>">
<label>
<input name="Unjoin" type="submit" id="Unjoin" value=" Unjoin " />
</label>
</form>
    <p>&nbsp;</p>
    <p><a>DESCRIPTION :</a>
      <?php
      $con=mysql_connect("localhost","root","");
	  mysql_select_db("test",$con);
	  $resultt=mysql_query("select * from `comm_det` where `comm_no`='$commno'");
	  $row=mysql_fetch_array($resultt);
	  
	  echo "<font face=\"Comic Sans MS, cursive\"> $row[3] </font>";
      ?> 
    </p>     
      <p><a>OWNER :</a>
              <?php
	  $s=mysql_query("select * from `login` where `lno`='$row[2]'");
	  $row1=mysql_fetch_array($s);
      echo "<font face=\"Comic Sans MS, cursive\"> $row1[1] </font>";
      ?>      </p>     
      <p><a>MEMBERS :</a> 
        <?php
		$con = mysql_connect("localhost","root","");
	    $result = mysql_query("SELECT * FROM `user_comm` where `comm_no`='$commno'");
		$n=mysql_num_rows($result);		
		  for($j=0;$j<$n;$j++)
		  {
			$row = mysql_fetch_array($result);
			$result1=mysql_query("select * from `login` where `lno`='$row[0]'");
			$Nrows=mysql_num_rows($result1);
for($i=0;$i<$Nrows;$i++)
{
$row1=mysql_fetch_array($result1);
?>
</p>
<font style="font-family:Comic 'Comic Sans MS', cursive" class="style5">
<?php	echo $row1[1];
		}
	  }
?>
</p>
        </font>
</h1>      
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
$getpic=mysql_query("SELECT pic FROM comm_det where `comm_no`='$commno'");
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
