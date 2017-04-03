<?php

	function Connection(){
		$server="192.168.43.87";
		//$user="SmartFridge";
		//$pass="Smart";
		$user="abdra";
		$pass="abdra";
		$db="fData";

		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}

		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>
