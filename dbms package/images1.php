<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>successful login</title>
</head>
<style type="text/css">

a:hover,a:active
{
background-color:#7A991A;
float:left;
}

a:link,a:visited
{
display:block;
color:#FFFFFF;
background-color:#98bf21;
text-align:center;
padding:4px;
text-decoration:none;
text-transform:uppercase;
}

#Layer1 {
	position:relative;
	width:600px;
	height:600px;
	z-index:1;
	left:2px;
	top: 15px;
	visibility: visible;
}

#Layer2 {
	position:absolute;
	margin-top:-350px;
	width:299px;
	height:18px;
	z-index:2;
}

h1{text-shadow:5px 5px 5px #903;}
table.new1
{
	width:84%;
	height:520px;
	border:3px solid #F90;
	background-color:#FC3;
	
}

div
{
	
	background-color:#393;
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
<body style="background-color:#FAE6A9">
<center>
<tr>
	<img src="pics/wfn_logo2.png" width="100%" height="94"/>
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
<a href="login.php">
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
<image src="poo.jpg" width="200" height="200">
</image>
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
<table class="new1" align="right">
<tr>
<td>
 <div class="holder_top" style="margin-top:10px "></div> 
	<div class="holder"> 
 
 <div id="Layer1"> 
<script type="text/javascript">
//Specify the slider's width (in pixels)
var sliderwidth="300px"
//Specify the slider's height
var sliderheight="250px"
//Specify the slider's slide speed (larger is faster 1-10)
var slidespeed=3
//configure background color:
slidebgcolor=""
 
//Specify the slider's images
var leftrightslide=new Array()
var finalslide=''
//leftrightslide[0]='<a href="eweek06.html"><img src="img/NEN.jpg" border=1></a>'
leftrightslide[0]='<a href="eweek07.html"><img src="img/eweek07.jpg" border=1></a>'
leftrightslide[1]='<a href="eweek08.html"><img src="img/eweek08.jpg" border=1></a>'
leftrightslide[2]='<a href="eweek09.html"><img src="img/eweek09.jpg" border=1></a>'
leftrightslide[3]='<a href="eweek10.html"><img src="img/eweek10.jpg" border=1></a>'
 
//Specify gap between each image (use HTML):
var imagegap=" "
 
//Specify pixels gap between each slideshow rotation (use integer):
var slideshowgap=3
 
 
////NO NEED TO EDIT BELOW THIS LINE////////////
 
var copyspeed=slidespeed
leftrightslide='<nobr>'+leftrightslide.join(imagegap)+'</nobr>'
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+leftrightslide+'</span>')
var actualwidth=''
var cross_slide, ns_slide
 
function fillup(){
if (iedom){
cross_slide=document.getElementById? document.getElementById("test2") : document.all.test2
cross_slide2=document.getElementById? document.getElementById("test3") : document.all.test3
cross_slide.innerHTML=cross_slide2.innerHTML=leftrightslide
actualwidth=document.all? cross_slide.offsetWidth : document.getElementById("temp").offsetWidth
cross_slide2.style.left=actualwidth+slideshowgap+"px"
}
else if (document.layers){
ns_slide=document.ns_slidemenu.document.ns_slidemenu2
ns_slide2=document.ns_slidemenu.document.ns_slidemenu3
ns_slide.document.write(leftrightslide)
ns_slide.document.close()
actualwidth=ns_slide.document.width
ns_slide2.left=actualwidth+slideshowgap
ns_slide2.document.write(leftrightslide)
ns_slide2.document.close()
}
lefttime=setInterval("slideleft()",30)
}
window.onload=fillup
 
function slideleft(){
if (iedom){
if (parseInt(cross_slide.style.left)>(actualwidth*(-1)+8))
cross_slide.style.left=parseInt(cross_slide.style.left)-copyspeed+"px"
else
cross_slide.style.left=parseInt(cross_slide2.style.left)+actualwidth+slideshowgap+"px"
 
if (parseInt(cross_slide2.style.left)>(actualwidth*(-1)+8))
cross_slide2.style.left=parseInt(cross_slide2.style.left)-copyspeed+"px"
else
cross_slide2.style.left=parseInt(cross_slide.style.left)+actualwidth+slideshowgap+"px"
 
}
else if (document.layers){
if (ns_slide.left>(actualwidth*(-1)+8))
ns_slide.left-=copyspeed
else
ns_slide.left=ns_slide2.left+actualwidth+slideshowgap
 
if (ns_slide2.left>(actualwidth*(-1)+8))
ns_slide2.left-=copyspeed
else
ns_slide2.left=ns_slide.left+actualwidth+slideshowgap
}
}
 
 
if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+sliderwidth+';height:'+sliderheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+sliderwidth+';height:'+sliderheight+';background-color:'+slidebgcolor+'" onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed">')
write('<div id="test2" style="position:absolute;left:0px;top:0px"></div>')
write('<div id="test3" style="position:absolute;left:-1000px;top:0px"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+sliderwidth+' height='+sliderheight+' name="ns_slidemenu" bgColor='+slidebgcolor+'>')
write('<layer name="ns_slidemenu2" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('<layer name="ns_slidemenu3" left=0 top=0 onMouseover="copyspeed=0" onMouseout="copyspeed=slidespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script> 

<p style="margin-top:-25px;text-align:center ">Click in to view more photos. . .</p> 
</div> 
<div style="margin-top:-330px;margin-left:135px "> 
<iframe src="http://player.vimeo.com/video/13266446?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1" width="300" height="250" frameborder="0"></iframe><p></p> 
</div> 
<!--/div--> 
 
	<div class="footer" style="height: 1px"> 
	<!--/div--> 
	
	<div class="navigation" style="margin-top:20px; height:0px"> 
 
		<span class="left" style="margin-top:-6px;position:relative;text-indent:190px">&copy; </span> 
		
		<div class="clearer"><span></span></div> 
 
    </div> 
</td>
<!--input type="image" value="upload" /-->
<center> <strong> IMAGES </strong> :) </center>
</td>
</tr>
</td>

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