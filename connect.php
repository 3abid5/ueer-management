<?php 
	$connection = mysqli_connect("localhost","root","");//(hostname,dbuser,dbpassword)
	if(!$connection){
		echo "you have fuckedup in database". die(mysqli_error($connection));
	};

	$dbselect = mysqli_select_db($connection,"test");
	if(!$dbselect){
		echo "you have fuckedup in database". die(mysqli_error($connection));
	};
?>