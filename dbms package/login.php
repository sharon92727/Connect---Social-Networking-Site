<!DOCTYPE HTML>
<html>
<head>
<title>Connect</title>
<!-- stylesheets -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/dark.css" rel="stylesheet" type="text/css">
<!-- modernizr enables HTML5 elements and feature detects --><script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<body>
  <div id="main">

    <!-- begin header -->
    <header><div id="logo"><h1><a href="#">CONNECT</a></h1></div></header>
<!-- end header -->
<!-- begin content -->
<div id="site_content">
      <div id="left_content">
        <p>&nbsp;</p>
        <form name="form1" method="post" action="success.php">
        <p>Username :
          <input type="text" name="ename">
        </p>
        <p>Password :    
          <input type="password" name="pwd">
        </p>
<p>&nbsp</p>
        <p>
          <input type="submit" name="login" id="button" value=" LOGIN ">
        </p>
<h1>Not a member yet ???</h1>
<a href="signup.php"><input type="submit" name="signup" id="button" value=" Sign Up Here "></a>
        </form>
      </div>
      <img src="images/logo.jpg" alt="about me" width="384" height="394" style="float: left;" title="about me">
      <!--div id="right_content">
</div-->
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
