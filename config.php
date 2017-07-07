<?php
	$con = mysqli_connect("sql313.1free-host.com","frh1_19136180","70hnbtg5");
	if($con==NULL){
		echo "Error establishing database connection.";
	}
	else{
		mysqli_select_db($con,"frh1_19136180_songs");
	}
	error_reporting(0);
?>