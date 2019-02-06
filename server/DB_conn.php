<?php
//DATABASE Connection
		define('HOST','localhost');
		define('USERNAME','root');
		define('PASSWORD','');
		define('DBNAME','sv_foods');
		$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
		if(mysqli_connect_errno()){
			die("database connection failed :" . mysqli_connect_error() ."_" . mysqli_connect_errno() .")" );
		}
?>
