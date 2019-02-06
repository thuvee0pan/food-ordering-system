<?php
    session_start();
    $errors = array();

    require ("DB_conn.php");
    require ("auth.php");
    require ("order.php");

    function redirect_to ($location){
		header("Location: ". $location);
  }
  function CheckQuary ($qr) {
		if(!$qr) {
			die( "Quary Error" );
		}
	}
?>
