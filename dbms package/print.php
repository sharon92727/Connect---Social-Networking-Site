<?php
	include("connect.php");
	$sql=mysql_query("select photo from photos");
	$temp=-1;
	echo"<table>";
	while($row=mysql_fetch_array($sql))
	{
		$temp=$temp+1;
		if($temp%3!=0)
		{
		//echo"<table>";
?>
		<tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>
<?php
		echo "<img src='$row[0]' width=\"150\" height=\"150\"/>";
		}
		else
		{
		echo"<table>";
		?>
        <table>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        </table>
        <?php
		echo "<img src='$row[0]' width=\"150\" height=\"150\"/>";
		}
		
	}
?>