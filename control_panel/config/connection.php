<?php
define("allow","yes");
	class connection
		{
			public $gConnect;
			function __construct()
				{
					global $connect;
					$connect = mysqli_connect(host,username,password, 'croweddurshal')or die(mysqli_connect_error());
					//$select = mysql_select_db(database)or die(mysql_error());
					$this->gConnect = &$connect;
					
				}
			
		}
		$connection = new connection();
		
	
?>