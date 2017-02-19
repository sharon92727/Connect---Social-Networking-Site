<?php
		session_start();
		$commno=$_GET['id'];
		echo $commno;
		$id=$_SESSION['id'];
		echo $id;
		$name=$_SESSION['name']; 
		$con = mysql_connect("localhost","root","");
	                mysql_select_db("test", $con);
                                $result = mysql_query("SELECT * FROM `user_comm` where `comm_no`='$commno'");
		$flag=0;
			//$row = mysql_fetch_array($result);
			//$array=explode("$",$row[0]);
			 $Nrows = mysql_num_rows($result);
			 echo "rows";
			 echo $Nrows;
			for($i=0;$i<$Nrows;$i++)
			{
				$row = mysql_fetch_array($result);
		                                echo $row[0];
				if($row[0]==$id)
				{
				$flag=1;
				} 
			}
			
			if($flag==1)
			@header("location:already_member.php?id2=$commno");else
			if($i==$Nrows)
			{
			$mem=$_SESSION['id'];
			$sql="insert into `user_comm` values('$mem','$commno')";
				mysql_query($sql);
				@header("Location:added_communities_page.php?id2=$commno");
			}
?>