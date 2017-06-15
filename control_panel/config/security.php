<?php
	#DATABASE CONFIGURATION
	/*require_once 'config/config.php';
	require_once 'config/connection.php';*/


if(!isset($_SESSION['ad_id']) || $_SESSION['ad_id'] == '')
{

header('location:index.php?0');
exit;
}

	
?>