<?
if($img1_name!="")
{
@copy("$img","$img_name") or die("couldn't copy the file");
}
else
{
die("no input specified");
}
?>
<html>
<head>
<title> Successful file upload </title>
</head>
<body>
SUCCESS
<p>you sent <?echo "$img1_name"?>, a <?echo "$img1_size" ?> byte file with a mimi type of <? echo "$img1_type";?>
</p>
</body>
</html>