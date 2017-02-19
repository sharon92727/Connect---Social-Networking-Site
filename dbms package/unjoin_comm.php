<?php
		session_start();
		$commno=$_GET['id']; 
		$user=$_SESSION['id'];
		$con = mysql_connect("localhost","root","");
	                mysql_select_db("test", $con);
	                $sql="SELECT * FROM `user_comm` where `comm_no`='$commno'";
                                $result = mysql_query($sql);
		$Nrows=mysql_num_rows($result);
		$flag=0;
		
		for($i=0;$i<$Nrows;$i++)
			{ 
			    $row = mysql_fetch_array($result);
				if($row[0]==$user)
				{					   
					mysql_query("delete from user_comm where `lno`='$user' and `comm_no`='$commno'");	
					$flag=1;				   
					@header("Location:communities_page.php?id2=$commno");
				}
			}
			if($flag==0)
			@header("location:not_member.php?id2=$commno");
						
?>