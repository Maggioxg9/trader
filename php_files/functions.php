<?php 


	function clearSessionBools(){
		unset($_SESSION['tmppostuserfname']);
		unset($_SESSION['tmppostuserlname']);
	}

	header("Location: ../index.html");
	exit();
	
?>