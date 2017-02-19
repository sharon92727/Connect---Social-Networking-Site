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
<!--li><a href="index.html">home</a></li>
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
<li><a href="#">send message</a></li>
<li><a href="#">view scrapbook</a></li>
</ul>
<a href="scrapbook.php">scrapbook</a></li>
          <li><a href="friends.php">friends</a></li>
          <li>
               <ul>
<li><a href="create_communities.php">create communities</a></li>
              <li><a href="view_communities.php">view communities</a></li>
</ul><a href="#">communities</a></li>
          <li><a href="login.php">log out</a></li-->
        </ul></nav></header><!-- end header --><!-- begin content --><div id="site_content">
<div id="left_content">
        <table width="461" align="left" class="new1">
  <tr valign="top">
</tr>
<!--class="new1" align="left"-->
<tr>
<td>

<center> 
 <form id="form1" name="form1" method="post" action="regis_check1.php" enctype="multipart/form-data">
<table width="800" border="0" cellspacing="0" align="center">
                  <tr>
                    <td width="128" height="48" bordercolor="#000000">First Name </td>
                    <td width="624"><input name="firstname" type="text" size="104" maxlength="25" /></td>
                  </tr>
                  <tr>
                    <td height="44" bordercolor="#000000">Last Name</td>
                    <td><input type="text" name="lastname" size="104" maxlength="25"/></td>
                  </tr>
                  <tr>
                    <td height="42" bordercolor="#000000">Username</td>
                    <td><input name="username" type="text" size="104" maxlength="25" /></td>
                  </tr>
                  <tr>
                    <td height="42" bordercolor="#000000">E-Mail ID</td>
                    <td><input name="eid" type="text" size="104" maxlength="25" /></td>
                  </tr>
                  <tr>
                    <td height="47" bordercolor="#000000">Password</td>
                    <td><input name="password" type="password" size="104" /></td>
                  </tr>
                </table>
<table width="300" height="52" border="0" cellspacing="0" align="center">
                  <tr>
                    <td width="92" height="52">Gender</td>
                    <td width="83"><input name="gender" type="radio" value="m" />
Male</td>
                    <td width="85"><input name="gender" type="radio" value="f" />
Female</td>
                  </tr>
                </table>
                <table width="500" height="52" border="0" cellspacing="0" align="center">
                  <tr>
                    <td width="110">Date of Birth</td>
                    <td width="74"><select name="day">
                      <option value="01">1</option>
                      <option value="02">2</option>
                      <option value="03">3</option>
                      <option value="04">4</option>
                      <option value="05">5</option>
                      <option value="06">6</option>
                      <option value="07">7</option>
                      <option value="08">8</option>
                      <option value="09">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select></td>
                    <td width="112"><select name="month">
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select></td>
                    <td width="105"><select name="year">
                      <option value="1950">1950</option>
                      <option value="1951">1951</option>
                      <option value="1952">1952</option>
                      <option value="1953">1953</option>
                      <option value="1954">1954</option>
                      <option value="1955">1955</option>
                      <option value="1956">1956</option>
                      <option value="1957">1957</option>
                      <option value="1958">1958</option>
                      <option value="1959">1959</option>
                      <option value="1960">1960</option>
                      <option value="1961">1961</option>
                      <option value="1962">1962</option>
                      <option value="1963">1963</option>
                      <option value="1964">1964</option>
                      <option value="1965">1965</option>
                      <option value="1966">1966</option>
                      <option value="1967">1967</option>
                      <option value="1968">1968</option>
                      <option value="1969">1969</option>
                      <option value="1970">1970</option>
                      <option value="1971">1971</option>
                      <option value="1972">1972</option>
                      <option value="1973">1973</option>
                      <option value="1974">1974</option>
                      <option value="1975">1975</option>
                      <option value="1976">1976</option>
                      <option value="1977">1977</option>
                      <option value="1978">1978</option>
                      <option value="1979">1979</option>
                      <option value="1980">1980</option>
                      <option value="1981">1981</option>
                      <option value="1982">1982</option>
                      <option value="1983">1983</option>
                      <option value="1984">1984</option>
                      <option value="1985">1985</option>
                      <option value="1986">1986</option>
                      <option value="1987">1987</option>
                      <option value="1988">1988</option>
                      <option value="1989">1989</option>
                      <option value="1990">1990</option>
                    </select></td>
                  </tr>
                </table>
                <table width="825" border="0" cellspacing="0" align="center">
                  <tr>
                    <td width="103" height="42">City</td>
                    <td width="634"><input name="city" type="text" size="104" /></td>
                  </tr>
                  <tr>
                    <td height="43">State</td>
                    <td><input name="state" type="text" size="104" /></td>
                  </tr>
                  <tr>
                    <td height="46">Country</td>
                    <td><input name="country" type="text" size="104" /></td>
                  </tr>
                  
     

<tr height="46">    
    <td>Phone Number
    </td>
    <td ><input type="text" name="ph_no" size="104"/>
    </td>
</tr>

<tr height="46">    
    <td>Address
    </td>
    <td><input type="text" name="address" size="104"/>
    </td>
</tr>
    

<tr height="46">
    <td>Zipcode
    </td>
    <td><input type="text" name="zipcode" size="104"/>
    </td>
</tr>

<tr height="46">
    <td>Website
    </td>
    <td><input type="text" name="website" size="104"/>
    </td>
</tr>

<tr height="46">
    <td>Working at
    </td>
    <td><input type="text" name="working" size="104"/>
    </td>
</tr>

<tr height="46">
    <td>College
    </td>
    <td><input type="text" name="college" size="104"/>
    </td>
</tr>

<tr height="46">
    <td>School
    </td>
    <td><input type="text" name="school" size="104"/>
    </td>
</tr>
    
<tr height="46">
    <td>Activities
    </td>
    <td><input type="text" name="activities" size="104"/>
    </td>
</tr>    

<tr height="46">
    <td>Interests
    </td>
    <td><input type="text" name="interests" size="104"/>
    </td>
</tr>

<tr height="46">
    <td>Sports
    </td>
    <td><input type="text" name="sports" size="104"/>
    </td>
</tr>
<tr>
	<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
	<td align="left">Choose a file to upload as picture</td>
    <td><input name="uploadedfile" type="file" /></td>
</tr>


                </table>
                <blockquote>
      <!--blockquote>
                    <!--blockquote>
                      <!--blockquote>
                      <!--blockquote>
                  <!--blockquote>
                    <!--blockquote>
                      <blockquote><blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote><blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote-->
                        <p class="style1">
                        <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input type="Submit" name="submit" value="Save" align="middle" ></td>
                        <td>  <input type="reset" name="Reset" value="cancel"  align="middle"/></td>
                        </tr>
                        </p>
                        <blockquote>
                          <blockquote>
                            <blockquote>
                              <blockquote>
                                <blockquote>
                                  <blockquote>
                                    <blockquote>
                                      <blockquote>
                                        <blockquote>
                                          <p>&nbsp;</p>
                                        </blockquote>
                                      </blockquote>
                                    </blockquote>
                                  </blockquote>
                                </blockquote>
                              </blockquote>
                            </blockquote>
                          </blockquote>
                        </blockquote>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote>
          </blockquote>
      </blockquote>
      </div>
    </form>

  <!--p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p-->
</center>
</td>
</tr>
</table>

</font>
</table>
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
