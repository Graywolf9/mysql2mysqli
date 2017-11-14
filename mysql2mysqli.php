<?php
	// Mapeo de mysql a mysqli por depreciación
	function mysql_connect($host,$user,$pass,$bd){
		return mysqli_connect($host,$user,$pass,$bd);
	}
	function mysql_close($con){
		return mysqli_close($con);
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
	function mysql_result($var,$row){
		$var->data_seek($row);
		return $var->fetch_array(); 
	}
	// Fin: Mapeo de mysql a mysqli por depreciación	
?>