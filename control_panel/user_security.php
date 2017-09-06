<?php 

if(!isset($_SESSION['userid']) || $_SESSION['userid'] == '')
{
header('location:index.php?0');
exit;
}
?>
