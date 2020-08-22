<?php
	$con=mysqli_connect('localhost','root','','covid');
	mysqli_select_db($con,"covid");
	if(!$con)
	{
		echo 'Not connected';
	}
	if(!mysqli_select_db($con,'covid'))
	{
		echo 'Database Not Selected';
	}	
	
?>