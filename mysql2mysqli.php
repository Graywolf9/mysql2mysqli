<?php
	// Mapeo de mysql a mysqli por depreciación
	function mysql_connect($host,$user,$pass,$bd){
		return mysqli_connect($host,$user,$pass,$bd);
	}
	function mysql_select_db($bd,$con){
		return mysqli_select_db($con,$bd);
	}
	function mysql_query($query,$con){
		return mysqli_query($con,$query);
	}
	function mysql_fetch_row($var){
		return mysqli_fetch_row($var);
	}
	function mysql_fetch_array($var){
		return mysqli_fetch_array($var);
	}
	// Fin: Mapeo de mysql a mysqli por depreciación	
?>