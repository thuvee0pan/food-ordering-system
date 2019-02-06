<?php 
	include("./server/server.php");
	session_destroy();
	$loggedIn = false;
	redirect_to("index.php");
?>