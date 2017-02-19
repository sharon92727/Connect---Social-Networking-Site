<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Login</title>
<style>
a.navwhite:link { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:visited { text-decoration: none; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navwhite:hover { text-decoration: underline; color: #ffffff; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:link { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:visited { text-decoration: none; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
a.navblack:hover { text-decoration: underline; color: #000000; font-family: Verdana, Arial, sans-serif; font-size: 10px; font-weight: bold; }
</style>
<style>
h1 {
	font-family: Arial, sans-serif;
	font-size: 30px;
	color: #D6D6D6;
}
h2 { font-family: Arial, sans-serif; font-size: 18px; color: #F17C0A;}
body,p,b,i,em,dt,dd,dl,sl,caption,th,td,tr,u,blink,select,option,form,div,li {
	font-family: Arial, sans-serif;
	font-size: 12px;
	background-color: #FDE7B8;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFCC66">
<p>
<table cellspacing="0" cellpadding="10" width="913" align="left" border="0">  
<tr>
      <td>
      </td></tr>
  <tr>
<!-------------------------------------------------Left Column--------------------------------------------------------------->
      <td width="524" VALIGN=top v>
       <p>&nbsp;</p>
       <blockquote dir="ltr" style="MARGIN-RIGHT: 0px"><img src="logo.jpg" width="482" height="350"></blockquote>
      </td>
<!------------------------------------------------Logo------------------------------------------------------------------------->
       <td width="349" bgcolor="#ffffff"><h1 align="center"><font color=#F17C0A>Login</font></h1>
        <p align="center">&nbsp;</p>
        <div align="center">
         <!----------------------------------------------Username and password------------------------------------------------------></div>
        <form name="form1" action="  " method="POST">
        <p align="center">Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="WIDTH: 154px; HEIGHT: 22px" type="text" size=19 name="username">
          </p>
          <p align="center">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          <input style="WIDTH: 153px; HEIGHT: 22px" type="password" name="password"></p>
          
          <div align="center">
            <?php
if(isset($_POST['login'])) 
{
$username = $_POST["username"];
$password = $_POST["password"];
$validated = false;
$connection=mysqli_connect('localhost','root','','sn') or die ("ERROR: Cannot Connect");
$sql= "SELECT userid,password FROM user";
$result= mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) 
{
while($row=mysqli_fetch_row($result)) 
{
if ($row[0]==$username and $row[1]==$password)
{
$validated=true;
break;
}
else
$validated=false;
}
if($validated==false) 
echo '<span style="color:red"><center>Invalid username/password combination.</center></span>';     
else  
{
     header("location:index.html"); 
     break;
}} 
mysqli_close($connection);
}

?>
          </div>
          <p align="right">
            <input type="submit" value="Sign In" name="login">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p align="left">&nbsp;</p>
</form>

      <p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
      <p> Not a member yet ???&nbsp; <a href=signup.html>
        <input type="button" value="Sign Up" name="Sign_Up">
      </a>&nbsp;&nbsp;here !!!</p>
<p align="left">&nbsp;</p></td></tr>

      <tr>
         <td></td>
         <td>&nbsp;</td>
      </tr></table>
</p>
</body>
</html>