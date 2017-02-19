<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
</head>

<style type="text/css">
table.new1
{
	width:60%;
	height:520px;
	border:3px solid #F90;
	background-color:#FFF;
	
}

#Layer1 {
	position:absolute;
	width:1243px;
	height:644px;
	z-index:1;
	border:medium;
	background-color:#B6C9FC;
	left: 3px;
	top: 5px;
}
.style1 {
	font-family: "Bookman Old Style";
	font-size: 36px;
}
.style2 {
	font-family: "Bookman Old Style";
	font-size: 36px;
	color: #B11E89;
	font-weight: bold;
}

</style>

<body style="background-color:#BEEBEA">
<img src="pics/wfn_logo2.png" width="100%" height="94" />

<font style="font-family:'Comic Sans MS', cursive" style="font-size:24px">
</table>

<table align="right">
<tr>
<td> <a href="registration.php"> BACK </a> </td>
</tr>
</table>


<table width="59%" height="207" align="center" class="new11">
<form id="form1" name="form1" action="profile_check.php" method="post" enctype="multipart/form-data">

     <!--form enctype="multipart/form-data" action="profile_pic_uploader.php" method="POST">
     <tr align="left" valign="top">
     <td width="86%" height="27"-->
           <!--input type="image" value="upload" />
           <center> <strong> IMAGES </strong> :) </center--> 
     <!--input type="hidden" name="MAX_FILE_SIZE" value="100000" />
     <font face="Comic Sans MS, cursive" size="+1">
     Select photo</font> <input name="uploadedfile" type="file" />
     </td>

     <td width="14%" align="left">
     <input align="left" hspace="100px"type="submit" value="Upload File" />
     </td>
     </tr-->
    
          <!--td>
		  <center> // <strong> profile :) </strong> </center>
		  </td-->
	<!--/form-->

<tr valign="top" align="left">
    <td><h3>Email Address</h3>
    </td>
    <td valign="top"><input align="middle" type="text" name ="email"/>
    </td>
</tr>

<tr valign="top" align="left">    
    <td><h3>Phone Number</h3>
    </td>
    <td valign="top"><input type="text" name="ph_no"/>
    </td>
</tr>

<tr valign="top" align="left">    
    <td><h3>Address</h3>
    </td>
    <td valign="top"><input type="text" name="address"/>
    </td>
</tr>
    
<tr valign="top" align="left">
    <td><h3>City</h3>
    </td>
    <td valign="top"><input type="text" name="city"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>Zipcode</h3>
    </td>
    <td valign="top"><input type="text" name="zipcode"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>Website</h3>
    </td>
    <td valign="top"><input type="text" name="website"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>Working at</h3>
    </td>
    <td valign="top"><input type="text" name="working"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>College</h3>
    </td>
    <td valign="top"><input type="text" name="college"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>School</h3>
    </td>
    <td valign="top"><input type="text" name="school"/>
    </td>
</tr>
    
<tr valign="top" align="left">
    <td><h3>Activities</h3>
    </td>
    <td valign="top"><input type="text" name="activities"/>
    </td>
</tr>    

<tr valign="top" align="left">
    <td><h3>Interests</h3>
    </td>
    <td valign="top"><input type="text" name="interests"/>
    </td>
</tr>

<tr valign="top" align="left">
    <td><h3>Sports</h3>
    </td>
    <td valign="top"><input type="text" name="sports"/>
    </td>
</tr>
<tr>
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
	<td align="left">Choose a file to upload as picture</td>
    <td><input name="uploadedfile" type="file" /></td>
</tr>

    <tr>
      <!--td width="24%"><h3> Name </h3></td-->
      <td width="38%" align="right"><input type="submit" name="submit" value="SUBMIT" /></td>
    </tr>

    
<!--tr>  <td></td> <td></td>  </tr>
<tr>  <td></td> <td></td>  </tr-->


</form>
</table>