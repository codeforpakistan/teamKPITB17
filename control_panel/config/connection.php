<?php
define("allow","yes");
	class connection
		{
			public $gConnect;
			function __construct()
				{
					global $connect;
					$connect = mysqli_connect(host,username,password, 'croweddurshal')or die(mysqli_error($connect));
					//$select = mysql_select_db(database)or die(mysql_error());
					$this->gConnect = &$connect;
					
				}
			
		}
		$connection = new connection();
		
	
?>