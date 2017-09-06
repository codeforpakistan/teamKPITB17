<?php
	#DATABASE CONFIGURATION
	if(($_SESSION['ad_id']) && $_SESSION['ad_id'] != '')
		{
			$ad_id = $_SESSION['ad_id'];
			$ad_name = $_SESSION['ad_name'];
		}
		else
			{
				header('Location:index.php');
				exit;
			}
			
	/*require_once 'config/config.php';
	require_once 'config/connection.php';*/
	
function escape($string)
{
	return htmlentities(trim($string) , ENT_QUOTES , 'UTF-8' );
}
?>