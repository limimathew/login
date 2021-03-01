<?php

$link=mysqli_connect("localhost","root","","ddu");
	if($link===false)
	{
	die("error:couldnot connect".mysqli_connect_error());
	}
?>