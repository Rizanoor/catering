<?php 
	session_start();
	($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost",  "root",  ""));
	mysqli_select_db($GLOBALS["___mysqli_ston"], ("catering"));
	
	// settings
	$url = "http://localhost/catering/";
	$title = "Love Me Baked";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
