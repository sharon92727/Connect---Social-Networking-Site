<?php
session_start();
$username=$_SESSION['name'];
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
          
          <li class="selected">
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

          <li>
               <ul>
<li><a href="create_communities.php">create communities</a></li>
              <li><a href="view_communities.php">view communities</a></li>
</ul><a href="#">communities</a></li>
          <li><a href="login.php">log out</a></li>
        </ul></nav></header><!-- end header --><!-- begin content --><div id="site_content">
      <div id="left_content">
        <h1>&nbsp;</h1>
To change password <a href="change_pass.php">click here</a>
        <table width="461" align="left" class="new1">
<tr>
<td>

<center> 
  <p><strong><!--h2> Welcome to your Profile Page...!!! </h2--></strong> </p>
 
  <table width="90%" height="207" align="center" class="new11">
<form id="form1" name="form1" action="profile_check1.php" method="post" enctype="multipart/form-data">

<tr valign="top" align="left">
    <td><h4>Email Address</h4>
    </td>
    <td valign="top"><input align="middle" type="text" name ="email"/>
    </td>
</tr>

<tr valign="top" align="left">    
    <td><h4>Phone Number</h4>
    </td>
    <td valign="top"><input type="text" name="ph_no"/>
    </td>
</tr>

    
<tr valign="top" align="left">
    <td><h4>City</h4>
    </td>
    <td valign="top"><input type="text" name="city"/>
    </td>
</tr>



<tr valign="top" align="left">
    <td><h4>Occupation</h4>
    </td>
    <td valign="top"><input type="text" name="working"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h4>College</h4>
    </td>
    <td valign="top"><input type="text" name="college"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h4>School</h4>
    </td>
    <td valign="top"><input type="text" name="school"/>
    </td>
</tr>
    

<tr valign="top" align="left">
    <td><h4>Interests</h4>
    </td>
    <td valign="top"><input type="text" name="interests"/>
    </td>
</tr>

<tr>
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
	<td align="left"><h4>Choose a file to upload as picture</h4></td>
    <td><input name="uploadedfile" type="file" /></td>
</tr>

    <tr>
      <!--td width="24%"><h3> Name </h3></td-->
      <td width="38%" align="right"><p>&nbsp;
        </p>
        <p>
          <input type="submit" name="submit" value="SUBMIT" />
        </p></td>
    </tr>

    
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->


</form>
</table>
</center>
</td>
</tr>
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->



</table>

</font>
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
