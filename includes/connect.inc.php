<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	
	$mysql_db = 'alumni';
	
	if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysql_select_db($mysql_db)){
		die(mysql_error());
	}else{
       //going on
    }

?>
