<?php
	/*require_once 'config/config.php';
	require_once 'config/connection.php';*/
	session_start();
	$des = session_destroy();
	if($des)
		{
			header('Location:index.php');
		}
?>